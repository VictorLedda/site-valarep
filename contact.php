<?php


require_once('./vues/header.php');

$reqcontact = $pdo->query("SELECT * FROM contacts");

?>


<section class='contact-pricipal container'>
<h2 class='titre-conatct'>Nous contacter</h2>
<div class='flex'>
<img class='image-contact-principal' src='images/contact.jpg'/>


<div class='informations-contact'>

<h3 class='titre-contact-principal'>Nous contacter</h3>

<div class='test'>
<div class="trait-blanc"></div>

<div>
<div class='information-contact'>
<img class='icon' src='images/tel-blanc.png'/>
<h4 class='information-contact-titre'>03 27 21 58 58</h4>
</div>

<div class='information-contact'>
<img class='icon' src='images/mail-blanc.png'/>
<h4 class='information-contact-titre'>03 27 21 58 58</h4>
</div>

<div class='information-contact'>
<img class='icon' src='images/fax-blanc.png'/>
<h4 class='information-contact-titre'>valarp@valarep.fr</h4>
</div>
</div>
</div>
</div>

</div>

</section>




<section class='autres-contacts container'>

<?php
while($c=$reqcontact->fetch()){

    ?>
    <div class='trait-gris'></div>
<div class=' contact <?php if($c['id'] % 2 !== 0){ echo 'reverse';}?> scroll-part is-invert'>
    <img class='photo-contact <?php if($c['id'] % 2 !== 0){ echo 'content__to-left';}else{ echo 'content__to-right';}?>' src='images_uploads/avatars_contacts/<?= $c['avatar']; ?>'/>
    <div class='infos-contact <?php if($c['id'] % 2 == 0){ echo 'content__to-left';}else{ echo 'content__to-right';}?>'>
        <h2 class='contact-fonction'><?= $c['fonction']; ?></h2>
        <div class='infos-contact-portable'>
        <div class='partie-contact'>
        <div class='trait-bleu-contact'></div>
        <h3 class='nom-contact'><?= $c['nom'] ?></h3>
        </div>
        <div class='infos-contact'> 
        <img class='icon-contact' src='images/mail-bleu.png'/>
        <h4 class='contact-tel'><?= $c['telephone']; ?></h4>
        </div>
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