<?php
session_start();
if(isset($_SESSION['id'])){


require('../../vues/head_admin.php');
$contacts = $pdo->query("SELECT * FROM contacts");
?>





<?php

require('../../vues/sidebar_admin.php');

?>
<h2 class='titre-tous-les-contacts'>Tous les contacts</h2>
<section class='tous-les-contacts'>
    <?php
    while($c = $contacts->fetch()){

?>
<div class='contact-editer container'>
    <div class='contact-editer-infos'>
        <div class='contact-coordonnees'>
            <div class='contact-coordonnees-haut'>
            <div><img class='icon-editer' src='/valarep/images/editer-bleu.PNG'/><span><?=  $c['fonction'];  ?></span></div>
            <div><img class='icon-editer' src='/valarep/images/editer-bleu.PNG'/><span><?=  $c['telephone'];  ?></span></div>
            </div>
            <div><img class='icon-editer' src='/valarep/images/editer-bleu.PNG'/><span><?=  $c['nom'];  ?></span></div>
            

        </div>
        <button class='contact-changer-image'>Changer image</button>
        <div>
            <form action='supp-contact' type='POST'>
<input type='submit' value='supprimer'/>
    </form>
        <img class='icon-corbeille' src='/valarep/images/corbeille-rouge.PNG'/></div>
</div>
    <img class='avatar-editer' src='/valarep/images/<?=  $c['avatar'];  ?>'/>
   
</div>
<div class="trait-edition"></div>

<?php
    }

    ?>
</section>





<?php
}
include('../../vues/scripts.php');

?>


