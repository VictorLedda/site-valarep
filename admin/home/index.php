<?php
session_start();
if(isset($_SESSION['id'])){

   
require('../../vues/head_admin.php');

?>


<?php

require('../../vues/sidebar_admin.php');
$home = $pdo->query("SELECT * FROM home");
$h = $home->fetch();
?>
<header>
<label class='update' for='update-home'>Mettre à jour</label>

</header>




<section class='editer-informations-principales'>
<h1 class='titre-editer'>Editer la Home</h1>
<div class='section-formations'>
<h3>Formations</h3>
<form enctype='multipart/form-data' method="POST" action='/valarep/admin/index.php?action=editer-home'>
<div class='block-formation'>
<div class='titre-formation'>
    <div class='trait-bleu'></div>
<span>Informatique</span>
</div>
<textarea name='informatique'><?= $h['TextInformatique'];  ?></textarea>
</div>


<div class='block-formation'>
<div class='titre-formation'>
    <div class='trait-bleu'></div>
<span>Batiments et industries</span>
</div>
<textarea name='batiments'><?= $h['TextBatiments'];  ?></textarea>
</div>

<div class='block-formation'>
<div class='titre-formation'>
    <div class='trait-bleu'></div>
<span>Restauration</span>
</div>
<textarea name='restauration'><?= $h['TextRestauration'];  ?></textarea>
</div>
</div>

<div class='trait-gris'></div>
<h3 class='titre-notre-role'>Notre rôle</h3>
<div class='notre-role'>

<div class='contenu-notre-role'>
    <div>
<img class='img-role' src='/valarep/images_uploads/home/<?= $h['ImgRole'];  ?>'/>
</div>
<div class='text-role'>
<textarea name='text-role' class='textarea-role'><?= $h['TextRole'];  ?></textarea>
<label class='update' for='update-img-role'>Changer image <label>
<input name='img-role' class='displayNone' type='file' id='update-img-role' />
</div>
</div>
</div>
<div class='trait-gris'></div>
<h3 class='titre-lycee-dampierre'>Lycée Dampierre</h3>
<div class='lycee-dampierre'>

<div class='contenu-lycee-dampierre'>
<img class='img-dampierre' src='/valarep/images_uploads/home/<?= $h['ImgDampierre'];  ?>'/>
<div class='text-dampierre'>
<textarea name='text-dampierre' class='textarea-dampierre'><?= $h['TextDampierre'];  ?></textarea>
<label class='update' for='update-img-dampierre'>Changer image <label>
<input name='img-dampierre' class='displayNone' type='file' id='update-img-dampierre' />
</div>
</div>

<input class='displayNone' name='editer-home' type='submit' id='update-home'/>
</form>
</section>


<?php

}else{

    header("Location: /valarep/admin");
}
include('../../vues/scripts.php');
?>

