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
<h1 class='titres-toutes-arep'>Formations AREP</h1>
<div class="toutes-dormations-editer ">
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
        <button class='new-image'>Changer d'image   </button>
        <button class='new-doc'>Changer documentation </button>
        </div>
        <img class='icon-corbeille' src='/valarep/images/corbeille-rouge.PNG'/>
</div>
<div>
<img class='image-formation' src='/valarep/images_uploads/Formation_AREp/images/<?= $a['image']; ?>'/>
<img class='icon-editer' src='/valarep/images/editer-bleu.PNG'/>
</div>    
</div>
    
    <div class="trait-edition"></div>
    <?php
    }

?>
</div>
<h1 class='titres-toutes-apprentissage'>Formations en apprentissage</h1>

<div class="toutes-dormations-editer ">
    <?php
    while($a = $f_pro->fetch()){
    ?>
    <div class="formation-editer container">
        <div>
        <div class='formation-editer-titre'>
        <h3><?= $a['titre']; ?></h3>
        <img class='icon-editer' src='/valarep/images/editer-bleu.PNG'/>
        </div>
        <div class='buttons-editer'>
        <button class='new-image'>Changer d'image   </button>
        <button class='new-doc'>Changer documentation </button>
        </div>
        <img class='icon-corbeille' src='/valarep/images/corbeille-rouge.PNG'/>
</div>
<div>
<img class='image-formation' src='/valarep/images_uploads/Formation_professionelles/images/<?= $a['image']; ?>'/>
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
