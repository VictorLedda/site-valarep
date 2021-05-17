<?php
session_start();

if(isset($_SESSION['id'])){


require('../../vues/head_admin.php');
$reqPartenaires = $pdo->query("SELECT * FROM partenaires");
$p = $reqPartenaires->fetch();
?>



<?php

require('../../vues/sidebar_admin.php');

?>
<header>
<label class='update' for='update-partenaires'>Mettre à jour</label>

</header>

<section class='section-partenaires'>
<form enctype='multipart/form-data' method="POST" action='/valarep/admin/index.php?action=editer-partenaires'>
<h1 class='titre-partenaires'>Editer les partenaire</h1>
<div class='text-partenaires'>
    <h4>Editer le texte </h4>
<textarea name='text-partenaires'><?=  $p['TextPartenaires'];  ?></textarea>
</div>
<div class='ajout-logo'>
<h4>Ajouter un logo</h4>
<label for='ajouter-nouveau-logo' class='zone-nouveau-logo'>
<img class='new-logo' src='/valarep/images/logo.PNG' />
</label>
<input name='new-logo' class='displayNone' type='file' value='Nouveau logo' id ='ajouter-nouveau-logo'/>
</div>
<div class='logos-partenaires'>
<h4>Les logos partenaires</h4>

<?php
while($p = $reqPartenaires-> fetch()){

    ?>
    <div class='partenaire'>
    
<img class='logo-partenaires' src='/valarep/images_uploads/partenaires/<?= $p['image']; ?>' />
<div>
    <div class='logo-contenu'>
    <label class='label-corbeille' for='supp-logo<?= $p['id']; ?>'>Supprimer logo</label>
<input class='displayNone' type='submit' id='supp-logo'/>
</div>
</div>
<div class='trait-partenaire'></div>
</div>
<?php
}

?>
</div>
<input class='displayNone' id='update-partenaires' type='submit' name='update-partenaires'/>
</form>
</section>


<?php

}else{

    header("Location: /valarep/admin");
}
include('../../vues/scripts.php');
?>




