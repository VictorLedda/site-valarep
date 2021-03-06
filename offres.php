<?php


require_once('./vues/header.php');

$offres = $pdo->query("SELECT * FROM offres ORDER BY id DESC");

?>



<section class='offres '>
<h2 class='titre-offres'>Nos offres d'emplois</h2>

<?php
while($o=$offres->fetch()){

    ?>
    <div class='scroll-part is-invert'>
    <div class='offre content__to-up '>
        <div class="titre-offre ">
            <div class="trait-bleu"></div>
            <span><?= $o['nom']; ?></span>
        </div>
        <div class="contenu-offre">
            <div>
            <p class='paragraphe-offre'><?= $o['description']; ?></p>
            <div class='informations-offre'>

                 <div class="tel-offre">
                 <img class='image-tel-bleu' src='images/tel-bleu.PNG'/>
                    <span><?= $o['telephone']; ?></span>
                 </div>
                 <h4 class="personne-offre">Contacter <?= $o['personne'] ?></h4>
           </div>
            </div>
        
    
            <div class="genre-offre">
                <img class='image-genre-offre' src='images/offres/<?= $o['genre'] ?>.jpg'/>
                <h4><?= $o['genre'] ?></h4>
            </div>
        </div>

    </div>
</div>

    <?php
}

?>


</section>

<?php


require_once('./vues/footer.php');


?>
