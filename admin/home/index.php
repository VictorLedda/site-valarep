<?php
session_start();
if(isset($_SESSION['id'])){


require('../../vues/head_admin.php');

?>


<?php

require('../../vues/sidebar_admin.php');

?>

<section class='editer-informations-principales'>
<h1 class='titre-editer'>Editer la Home</h1>
<div class='section-formations'>
<h3>Formations</h3>

<div class='block-formation'>
<div class='titre-formation'>
    <div class='trait-bleu'></div>
<span>Informatique</span>
</div>
<textarea>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
</div>


<div class='block-formation'>
<div class='titre-formation'>
    <div class='trait-bleu'></div>
<span>Batiments et industries</span>
</div>
<textarea>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
</div>

<div class='block-formation'>
<div class='titre-formation'>
    <div class='trait-bleu'></div>
<span>Restauration</span>
</div>
<textarea>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
</div>
</div>

<div class='trait-gris'></div>
<h3 class='titre-notre-role'>Notre rôle</h3>
<div class='notre-role'>

<div class='contenu-notre-role'>
    <div>
<img class='img-role' src='/valarep/images/role.jpg'/>
</div>
<div class='block'>
<textarea class='text-notre-role'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
<label class='update' for='update-img-role'>Changer image notre role<label>
<input class='displayNone' type='file' id='update-img-role' />
</div>
</div>
</div>
<div class='trait-gris'></div>
<h3 class='titre-lycee-dampierre'>Lycée Dampierre</h3>
<div class='lycee-dampierre'>

<div class='contenu-lycee-dampierre'>
<img class='img-dampierre' src='/valarep/images/dampierre.jpg'/>
<div>
    output_add_rewrite_var
</div>
</div>


</section>


<?php

}
include('../../vues/scripts.php');
?>

