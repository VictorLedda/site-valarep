<?php
session_start();
if(isset($_SESSION['id'])){


require('../../vues/head_admin.php');
$contacts = $pdo->query("SELECT * FROM contacts");

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
    while($c = $contacts->fetch()){

?>
    <form method='POST' enctype= 'multipart/form-data' action='/valarep/admin/index.php?action=editer-contact&idContact=<?php if(isset($c['id'])){ echo $c['id']; }?>'>
    
<div class='contact-editer container'>
   
    <div class='contact-editer-infos'>
        <div class='contact-coordonnees'>
            <div class='contact-coordonnees-haut'>
            <div><img class='icon-editer editer' src='/valarep/images/editer-bleu.PNG'/>
            <span  class='span-coordonees'><input class='bouton-editer input-modif displayNone' name='new-fonction<?= $c['id'] ?>' type='text' value='<?=  $c['fonction'];  ?>'/><span class='input-non-modif'><?=  $c['fonction'];  ?></span></span></div>
           
            
            <div><img class='icon-editer editer' src='/valarep/images/editer-bleu.PNG'/>
            <span class='span-coordonees'>
            <input class='bouton-editer input-modif displayNone' name='<?= "new-tel".$c['id'] ?>' type='text' value='<?=  $c['telephone'];  ?>'/>
            <span class='input-non-modif'> <?=  $c['telephone'];  ?></span></span></div>
            </div>
            
            
            <div><img class='icon-editer editer' src='/valarep/images/editer-bleu.PNG'/><span  class='span-coordonees'>
            <input class='bouton-editer input-modif displayNone' name='<?= "new-nom".$c['id'] ?>' type='text' value='<?=  $c['nom'];  ?>'/>    
            <span class='input-non-modif'><?=  $c['nom'];  ?></span></span></div>
            

        </div>
        
       <label for='new-avatar<?= $c['id'] ?>' class='contact-changer-image'>Changer image</label>
        <input type='file' name='new-avatar<?= $c['id'] ?>' class='new-avatar-contact' id='new-avatar<?= $c['id'] ?>'/>
       <input id='update-contact<?= $c['id'];  ?>' type='submit' value='Mettre à jour' class='displayNone'/>
     
      
    </form>
           <form  class='ajout-offre' enctype= 'multipart/form-data' method="POST" action='/valarep/admin/index.php?action=supp-contact&idContact=<?= $c['id']; ?>'>
            <input id='corbeille<?= $c['id'] ?>' class='bouton-supprimer' type='submit' value='supprimer'/>
            </form> 
           
            <div class='icons-update-contacts' >


<div>
       <img class='icon-corbeille'  src='/valarep/images/corbeille-rouge.PNG'/>
       <label class='label-corbeille' for='corbeille<?= $c['id'] ?>'>
       
            Supprimer</label>
    </div>
    <div>
<label class='label-icon-check' for='update-contact<?= $c['id'];  ?>'>Mettre à jour</label>
<img class='icon-check' src='/valarep/images/check-vert.PNG'/>
</div>    
    
</div>
    </div>
    <img class='avatar-editer' src='/valarep/images_uploads/avatars_contacts/<?=  $c['avatar'];  ?>'/>
   
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


