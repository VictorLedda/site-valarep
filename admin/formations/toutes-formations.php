<?php
session_start();
if(isset($_SESSION['id'])){


require('../../vues/head_admin.php');

$f_arep = $pdo->query("SELECT * FROM formationsarep");
$f_pro = $pdo->query("SELECT * FROM formationsprofessionelles");
?>





<?php

require('../../vues/sidebar_admin.php');

?>
<header>
<label for='update' class='update displayNone'>Mettre à jour </label>

</header>
<h1 class='titres-toutes-arep'>Formations AREP</h1>
<div class="toutes-dormations-editer ">

   
    <?php
    while($a = $f_arep->fetch()){
    ?>
     <form method='POST' enctype= 'multipart/form-data' action='/valarep/admin/index.php?action=editer-formations&idContact=<?= $a['id']; ?>&formations=arep'>

     <input type='submit' value='Mettre à jour' id='check<?= $a['id']; ?>' class='input-mettre-a-jour'/>
    <div class="formation-editer container">
        <div>
        <div class='formation-editer-titre'>
       
    
        <img class='icon-editer editer' src='/valarep/images/editer-bleu.PNG'/>
            <span class='span-coordonees-formations'>
            <input class='bouton-editer input-modif displayNone' name='<?= "new-titre".$a['id'] ?>' type='text' value='<?=  $a['titre'];  ?>'/>
            <span class='input-non-modif'> <?=  $a['titre'];  ?></span></span>
    
    
    
    
    </div>
        <div class='buttons-editer'>
        <label for='new-photo-arep<?= $a['id']; ?>' class='new-image'>Changer d'image</label>
        <input type='file' name='new-image-arep<?= $a['id']; ?>' id='new-photo-arep<?= $a['id']; ?>' class='new-photo-formation'/>


        <label for='new-doc-arep<?= $a['id']; ?>' class='new-doc'>Changer documentation </label>
        <input type='file' name='new-doc-arep<?= $a['id']; ?>' id='new-doc-arep<?= $a['id']; ?>' class='new-photo-doc'/>   


    </div>
    </form>
        <form  class='ajout-offre' enctype= 'multipart/form-data' method="POST" action='/valarep/admin/index.php?action=supp-formations&idFormationAREP=<?= $a['id']; ?>'>
            <input id='corbeille<?=  $a['id']; ?>' class='bouton-supprimer' type='submit' value='supprimer'/>
            </form>
            <div class='icons-update'>
            <div>
        <label class='label-corbeille-formations' for='corbeille<?=  $a['id']; ?>'>
       
       Supprimer</label>
        <img class='icon-corbeille-formations' src='/valarep/images/corbeille-rouge.PNG'/>
    </div>
    <div class='marginTop'>
    <label class='label-icon-check' for='check<?= $a['id']; ?>'>Mettre à jour</label>
    <img class='icon-check' src='/valarep/images/check-vert.PNG'/>
    </div>    
</div>
    </div>
<div>
<img class='image-formation' src='/valarep/images_uploads/Formation_AREp/images/<?= $a['image']; ?>'/>

</div>    
</div>

    <div class="trait-edition"></div>
    <?php
    }

?>

</div>









<h1 class='titres-toutes-arep'>Formations Professionelles</h1>



<div class="toutes-dormations-editer ">

   
    <?php
    while($a = $f_pro->fetch()){
    ?>
     <form method='POST' enctype= 'multipart/form-data' action='/valarep/admin/index.php?action=editer-formations&idContact=<?php if(isset($a['id'])){ echo $a['id']; }?>&formations=pros'>

     <input type='submit' value='Mettre à jour' id='check-pros<?= $a['id']; ?>'' class='input-mettre-a-jour'/>
    <div class="formation-editer container">
        <div>
        <div class='formation-editer-titre'>
       
    
        <img class='icon-editer editer' src='/valarep/images/editer-bleu.PNG'/>
            <span class='span-coordonees-formations'>
            <input class='bouton-editer input-modif displayNone' name='<?= "new-titre-pros".$a['id'] ?>' type='text' value='<?=  $a['titre'];  ?>'/>
            <span class='input-non-modif'> <?=  $a['titre'];  ?></span></span>
    
    
    
    
    </div>
        <div class='buttons-editer'>
        <label for='new-photo-formation-pros<?= $a['id']; ?>' class='new-image'>Changer d'image   </label>
        <input type='file' name='new-image-pros<?= $a['id']; ?>' id='new-photo-formation-pros<?= $a['id']; ?>' class='new-photo-formation'/>


        <label for='new-photo-doc<?= $a['id']; ?>' class='new-doc'>Changer documentation </label>
        <input type='file' name='new-doc-pros<?= $a['id']; ?>' id='new-photo-doc<?= $a['id']; ?>' class='new-photo-doc'/>   

    </div>
    </form>
        <form  class='ajout-offre' enctype= 'multipart/form-data' method="POST" action='/valarep/admin/index.php?action=supp-formations&idFormationPros=<?= $a['id']; ?>'>
            <input id='corbeille-pros<?=  $a['id']; ?>' class='bouton-supprimer' type='submit' value='supprimer'/>
            </form>
            <div class='icons-update'>
            <div>
        <label class='label-corbeille-formations' for='corbeille-pros<?=  $a['id']; ?>'>
       
       Supprimer</label>
        <img class='icon-corbeille-formations' src='/valarep/images/corbeille-rouge.PNG'/>
    </div>
    <div class='marginTop'>
    <label class='label-icon-check' for='check-pros<?=  $a['id']; ?>'>Mettre à jour</label>
    <img class='icon-check' src='/valarep/images/check-vert.PNG'/>
    </div>    
</div>
    </div>
<div>
<img class='image-formation' src='/valarep/images_uploads/Formation_Professionelles/images/<?= $a['image']; ?>'/>

</div>    
</div>

    <div class="trait-edition"></div>
    <?php
    }

?>

</div>

















<?php
}else{

    header("Location: /valarep/admin");
}
include('../../vues/scripts.php');

?>
