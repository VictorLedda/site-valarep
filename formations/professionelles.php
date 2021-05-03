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


<h1 class='titre-apprentissage'>Nos formations profesionnelles</h1>

<section class='apprentissage container'>
    <div class='block-titre'>
    <img class='icon-titre' src='/valarep/images/icon-pc-bleu.PNG'/>
    <h3 class='titre-genre-formation'>CAP</h3>
</div>
<div class="formations">
<?php
while($c=$reqcap->fetch()){

    ?>
<div class="formation">
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
    <img class='icon-titre' src='/valarep/images/icon-pc-bleu.PNG'/>
    <h3 class='titre-genre-formation'>Bac professionel</h3>
</div>
<div class="formations">
<?php
while($b=$reqbac_pro->fetch()){

    ?>
<div class="formation">
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
    <img class='icon-titre' src='/valarep/images/icon-pc-bleu.PNG'/>
    <h3 class='titre-genre-formation'>Titres pros</h3>
</div>
<div class="formations">
<?php
while($t=$reqtitres_pro->fetch()){

    ?>
<div class="formation">
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

include('../vues/scripts.php');

?>

