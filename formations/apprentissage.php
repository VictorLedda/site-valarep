<?php

include('../vues/header.php');
$apprentissage = $pdo->query("SELECT * FROM formationsprofessionelles");
?>


<h1 class='titre-apprentissage'>Nos formations en apprentissage</h1>

<section class='apprentissage container'>
    <div class='block-titre'>
    <img class='icon-titre' src='/valarep/images/icon-pc-bleu.PNG'/>
    <h3 class='titre-genre-formation'>Informatique</h3>
</div>
<div class="formations">
<?php
while($a=$apprentissage->fetch()){

    ?>
<div class="formation">
    <img class='image-formation' src='/valarep/images_uploads/Formation_Professionelles/images/<?= $a['image'] ?>'/>
    <div class="trait-bleu-horizontal"></div>
    <h4><?= $a['titre']?></h4>
    <a download='<?= $a['documentation'] ?>' href='/valarep/images_uploads/Formation_Professionelles/documentations/<?= $a['documentation'] ?>'><button class='telecharger-documentation'>Télécharger</button></a>
</div>
<?php
}

?>
</div>

</section>

<?php

include('../vues/scripts.php');

?>
