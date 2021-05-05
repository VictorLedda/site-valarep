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
<label for='update' class='update'>Mettre à jour </label>

</header>
<h1 class='titres-toutes-arep'>Formations AREP</h1>
<div class="toutes-dormations-editer ">
<form type='POST' action=''/>
    <input type='submit' value='Mettre à jour' id='update' class='input-mettre-a-jour'/>
    <?php
    while($a = $f_arep->fetch()){
    ?>
    <div class="formation-editer container">
        <div>
        <div class='formation-editer-titre'>
        <h3><?= $a['titre']; ?></h3>
        <img class='icon-editer' src='/valarep/images/editer-bleu.PNG'/>
        </div>
        <div class='buttons-editer'>
        <label for='new-photo-formation' class='new-image'>Changer d'image   </label>
        <input type='file' id='new-photo-formation' class='new-photo-formation'/>
        <label for='new-photo-doc' class='new-doc'>Changer documentation </label>
        <input type='file' id='new-photo-doc' class='new-photo-doc'/>   
    </div>
        <form  class='ajout-offre' enctype= 'multipart/form-data' method="POST" action='/valarep/admin/index.php?action=supp-formations&idFormationAREP=<?= $a['id']; ?>'>
            <input id='corbeille' class='bouton-supprimer' type='submit' value='supprimer'/>
            </form>
        <label class='label-corbeille-formations' for='corbeille'>
       
       Supprimer</label>
        <img class='icon-corbeille-formations' src='/valarep/images/corbeille-rouge.PNG'/>
</div>
<div>
<img class='image-formation' src='/valarep/images_uploads/Formation_AREp/images/<?= $a['image']; ?>'/>

</div>    
</div>
    
    <div class="trait-edition"></div>
    <?php
    }

?>
</form>
</div>
<h1 class='titres-toutes-apprentissage'>Formations en apprentissage</h1>

<div class="toutes-dormations-editer ">
    <?php
    while($p = $f_pro->fetch()){
    ?>
    <div class="formation-editer container">
        <div>
        <div class='formation-editer-titre'>
        <h3><?= $p['titre']; ?></h3>
        <img class='icon-editer' src='/valarep/images/editer-bleu.PNG'/>
        </div>
        <div class='buttons-editer'>
        <button class='new-image'>Changer d'image   </button>
        <button class='new-doc'>Changer documentation </button>
        </div>
        <form  class='ajout-offre' enctype= 'multipart/form-data' method="POST" action='/valarep/admin/index.php?action=supp-formations&idFormationPro=<?= $p['id']; ?>'>
            <input id='corbeille' class='bouton-supprimer' type='submit' value='supprimer'/>
            </form>
        <label class='label-corbeille-formations' for='corbeille'>
       
       Supprimer</label>
        
        <img class='icon-corbeille-formations' src='/valarep/images/corbeille-rouge.PNG'/>
</div>
<div>
<img class='image-formation' src='/valarep/images_uploads/Formation_professionelles/images/<?= $p['image']; ?>'/>
<img class='icon-editer' src='/valarep/images/editer-bleu.PNG'/>
</div>    
</div>
    
    <div class="trait-edition"></div>
    <?php
    }

?>
</div>





<?php
}
include('../../vues/scripts.php');

?>
