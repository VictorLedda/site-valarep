<?php

include('../vues/header.php');
$info = 'informatique';
$bat = 'batiments';
$ind = 'industrie';
$res = 'restauration';

$reqinformatique = $pdo->prepare("SELECT * FROM formationsarep WHERE genre = ?");
$reqinformatique->execute(array($info));

$reqbatiments = $pdo->prepare("SELECT * FROM formationsarep WHERE genre = ?");
$reqbatiments->execute(array($bat));

$reqindustrie = $pdo->prepare("SELECT * FROM formationsarep WHERE genre = ?");
$reqindustrie->execute(array($ind));

$reqrestauration = $pdo->prepare("SELECT * FROM formationsarep WHERE genre = ?");
$reqrestauration->execute(array($res));
?>




<section class='apprentissage container'>
<h1 class='titre-apprentissage'>Nos formations en apprentissage</h1>
    <div class='block-titre'>
    <img class='icon-titre' src='/valarep/images/icon-pc-bleu.PNG'/>
    <h3 class='titre-genre-formation'>Informatique</h3>
</div>
<div class="formations scroll-part is-invert">
<?php
while($i=$reqinformatique->fetch()){

    ?>
<div class="formation content__to-up">
    <img class='image-formation' src='/valarep/images_uploads/Formation_AREP/images/<?= $i['image'] ?>'/>
    <div class="trait-bleu-horizontal"></div>
    <h4><?= $i['titre']?></h4>
    <a download='<?= $i['documentation'] ?>' href='/valarep/images_uploads/Formation_AREP/documentations/<?= $i['documentation'] ?>'><button class='telecharger-documentation'>Télécharger</button></a>
</div>
<?php
}

?>
</div>

<div class='block-titre'>
    <img class='icon-titre' src='/valarep/images/industrie-bleu.PNG'/>
    <h3 class='titre-genre-formation'>Industrie</h3>
</div>
<div class="formations scroll-part is-invert">
<?php
while($i=$reqindustrie->fetch()){

    ?>
<div class="formation content__to-up">
    <img class='image-formation' src='/valarep/images_uploads/Formation_AREP/images/<?= $i['image'] ?>'/>
    <div class="trait-bleu-horizontal"></div>
    <h4><?= $i['titre']?></h4>
    <a download='<?= $i['documentation'] ?>' href='/valarep/images_uploads/Formation_AREP/documentations/<?= $i['documentation'] ?>'><button class='telecharger-documentation'>Télécharger</button></a>
</div>
<?php
}

?>
</div>


<div class='block-titre'>
    <img class='icon-titre' src='/valarep/images/assiette-bleu.PNG'/>
    <h3 class='titre-genre-formation'>Restauration</h3>
</div>
<div class="formations scroll-part is-invert">
<?php
while($r=$reqrestauration->fetch()){

    ?>
<div class="formation content__to-up">
    <img class='image-formation' src='/valarep/images_uploads/Formation_AREP/images/<?= $r['image'] ?>'/>
    <div class="trait-bleu-horizontal"></div>
    <h4><?= $r['titre']?></h4>
    <a download='<?= $r['documentation'] ?>' href='/valarep/images_uploads/Formation_AREP/documentations/<?= $r['documentation'] ?>'><button class='telecharger-documentation'>Télécharger</button></a>
</div>
<?php
}

?>
</div>

<div class='block-titre'>
    <img class='icon-titre' src='/valarep/images/immeuble-bleu.PNG'/>
    <h3 class='titre-genre-formation'>Bâtiment</h3>
</div>
<div class="formations scroll-part is-invert">
<?php
while($b=$reqbatiments->fetch()){

    ?>
<div class="formation content__to-up">
    <img class='image-formation' src='/valarep/images_uploads/Formation_AREP/images/<?= $b['image'] ?>'/>
    <div class="trait-bleu-horizontal"></div>
    <h4><?= $b['titre']?></h4>
    <a download='<?= $b['documentation'] ?>' href='/valarep/images_uploads/Formation_AREP/documentations/<?= $b['documentation'] ?>'><button class='telecharger-documentation'>Télécharger</button></a>
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
