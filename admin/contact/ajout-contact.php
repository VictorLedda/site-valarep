<?php

require('../../vues/head_admin.php');

?>
<header class='page-ajout'>
    
 
    
    </header>
<section class='contacts file-avatar'>
<?php

require('../../vues/sidebar_admin.php');

?>


<div class='titre-center'>

<h2 class='titre-contacts'>Ajout d'un contact</h2>

<form  class='ajout-offre' enctype= 'multipart/form-data' method="POST" action='/valarep/admin/index.php?action=ajout-contact'>
    
    <div class='champs-formulaire'>
  
<label><div class='trait-bleu'></div>Avatar du contact</label>
<input class='file-avatar' name='avatar' type='file' id='avatar' />

<label class='label-image-default' for='avatar'><img class='avatar-default' src='/valarep/images/avatar-default.png'/></label>
</div>

<div class='trait-gris-separateur'></div>

<div class='champs-formulaire'>
<label><div class='trait-bleu'></div>Prénom Nom</label>
  <input class='nom' name='nom' type='text' placeholder="Ex : Mr Emanuel David" />
</div>


<div class='trait-gris-separateur'></div>

<div class='champs-formulaire'>
<label><div class='trait-bleu'></div>Fonction de la personne</label>
  <input class='fonction' name='fonction' type='text' placeholder="Exemple : Secrétariat de direction" />
</div>


<div class='trait-gris-separateur'></div>

<div class='champs-formulaire'>
<label><div class='trait-bleu'></div>Numéro de téléphone</label>
  <input class='telephone' name='telephone' type='text' placeholder="Numéro de téléphone" />
</div>

    
    
    <input class='ajouter' name='publier' type='submit' value='publier'/>
    </form>



</div>
</div>

</section>