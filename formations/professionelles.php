<?php

include('../vues/header.php');
$cap = 'CAP';
$bac_pro = 'Bac professionel';
$titres_pro = 'Titres pro';


$reqcap = $pdo->prepare("SELECT * FROM formationsprofessionelles WHERE genre = ?");
$reqcap->execute(array($cap));


$reqbac_pro = $pdo->prepare("SELECT * FROM formationsprofessionelles WHERE genre = ?");
$reqbac_pro->execute(array($bac_pro));


$reqtitres_pro = $pdo->prepare("SELECT * FROM formationsprofessionelles WHERE genre = ?");
$reqtitres_pro->execute(array($titres_pro));
?>




<section class='apprentissage container'>
<h1 class='titre-apprentissage'>Nos formations profesionnelles</h1>
    <div class='block-titre'>
   
    <h3 class='titre-genre-formation'>CAP</h3>
</div>
<div class="formations scroll-part is-invert">
<?php
while($c=$reqcap->fetch()){

    ?>
<div class="formation content__to-up">
    <img class='image-formation' src='/valarep/images_uploads/Formation_Professionelles/images/<?= $c['image'] ?>'/>
    <div class="trait-bleu-horizontal"></div>
    <h4><?= $c['titre']?></h4>
    <a download='<?= $c['documentation'] ?>' href='/valarep/images_uploads/Formation_Professionelles/documentations/<?= $c['documentation'] ?>'><button class='telecharger-documentation'>Télécharger</button></a>
</div>
<?php
}

?>
</div>

<div class='block-titre'>
    
    <h3 class='titre-genre-formation'>Bac professionel</h3>
</div>
<div class="formations scroll-part is-invert">
<?php
while($b=$reqbac_pro->fetch()){

    ?>
<div class="formation content__to-up">
    <img class='image-formation' src='/valarep/images_uploads/Formation_Professionelles/images/<?= $b['image'] ?>'/>
    <div class="trait-bleu-horizontal"></div>
    <h4><?= $b['titre']?></h4>
    <a download='<?= $b['documentation'] ?>' href='/valarep/images_uploads/Formation_Professionelles/documentations/<?= $b['documentation'] ?>'><button class='telecharger-documentation'>Télécharger</button></a>
</div>
<?php
}

?>
</div>


<div class='block-titre'>
    
    <h3 class='titre-genre-formation'>Titres pros</h3>
</div>
<div class="formations scroll-part is-invert">
<?php
while($t=$reqtitres_pro->fetch()){

    ?>
<div class="formation content__to-up">
    <img class='image-formation' src='/valarep/images_uploads/Formation_Professionelles/images/<?= $t['image'] ?>'/>
    <div class="trait-bleu-horizontal"></div>
    <h4><?= $t['titre']?></h4>
    <a download='<?= $t['documentation'] ?>' href='/valarep/images_uploads/Formation_Professionelles/documentations/<?= $t['documentation'] ?>'><button class='telecharger-documentation'>Télécharger</button></a>
</div>
<?php
}

?>
</div>



</section>

<?php
require_once('../vues/footer.php');
include('../vues/scripts.php');

?>

