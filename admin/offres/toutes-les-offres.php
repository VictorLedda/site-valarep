<?php
session_start();
if(isset($_SESSION['id'])){


require('../../vues/head_admin.php');
$offres = $pdo->query("SELECT * FROM offres");

?>





<?php

require('../../vues/sidebar_admin.php');

?>
<header>
<label for='update' class='update displayNone'>Mettre à jour</label>

</header>
<h2 class='titre-tous-les-contacts'>Tous les contacts</h2>

<section class='tous-les-contacts'>

    <?php
    while($o = $offres->fetch()){

?>
    <form method='POST' enctype= 'multipart/form-data' action='/valarep/admin/index.php?action=editer-offres&idOffre=<?= $o['id']; ?>'>
    
<div class='contact-editer container'>
   
    <div class='contact-editer-infos'>
        <div class='contact-coordonnees'>
           
         <div class="display-flex">              
            <div><img class='icon-editer editer' src='/valarep/images/editer-bleu.PNG'/><span  class='span-coordonees'>
            <input class='bouton-editer input-modif displayNone' name='<?= "new-nom".$o['id'] ?>' type='text' value='<?=  $o['nom'];  ?>'/>    
            <span class='input-non-modif'><?=  $o['nom'];  ?></span></span></div>
            
            <div><img class='icon-editer editer' src='/valarep/images/editer-bleu.PNG'/><span  class='span-coordonees'>
            <input class='bouton-editer input-modif displayNone' name='<?= "new-personne".$o['id'] ?>' type='text' value='<?=  $o['personne'];  ?>'/>    
            <span class='input-non-modif'><?=  $o['personne'];  ?></span></span></div>
    </div>
            <div><img class='icon-editer editer' src='/valarep/images/editer-bleu.PNG'/><span  class='span-coordonees'>
            <input class='bouton-editer input-modif displayNone' name='<?= "new-telephone".$o['id'] ?>' type='text' value='<?=  $o['telephone'];  ?>'/>    
            <span class='input-non-modif'><?=  $o['telephone'];  ?></span></span></div>

            <div class='modif-description'><img class='icon-editer editer' src='/valarep/images/editer-bleu.PNG'/><span  class='span-coordonees textarea-non-modif'>
            <textarea class='textarea-modif input-modif displayNone' name='<?= "new-description".$o['id'] ?>' >  <?=  $o['description'] ; ?></textarea> 
            <div class='input-non-modif textarea-non-modif'><?=  $o['description'];  ?></div></span></div>
        </div>
        <input id='update-offre<?= $o['id'];  ?>' type='submit' value='Mettre à jour'  class='displayNone'/>
      
      
    </form>
           <form  class='ajout-offre' enctype= 'multipart/form-data' method="POST" action='/valarep/admin/index.php?action=supp-offre&idOffre=<?= $o['id']; ?>'>
            <input id='corbeille<?= $o['id'] ?>' class='bouton-supprimer' type='submit' value='supprimer'/>
            </form> 
           
            <div class='icons-update-contacts' >


<div>
       <img class='icon-corbeille'  src='/valarep/images/corbeille-rouge.PNG'/>
       <label class='label-corbeille' for='corbeille<?= $o['id'] ?>'>
       
            Supprimer</label>
    </div>
    <div>
<label class='label-icon-check' for='update-offre<?= $o['id'];  ?>'>Mettre à jour</label>
<img class='icon-check' src='/valarep/images/check-vert.PNG'/>
</div>    
    
</div>
    </div>
    <img class='avatar-editer' src='/valarep/images/offres/<?=  $o['genre'];  ?>.jpg'/>
   
</div>
<div class="trait-edition"></div>

<?php
    }

    ?>
    
</section>






<?php
}else{

    header("Location: /valarep/admin");
}
include('../../vues/scripts.php');

?>


