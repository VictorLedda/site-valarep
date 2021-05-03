<?php
session_start();
if(isset($_SESSION['id'])){

require('../../vues/head_admin.php');

?>
<header class='page-ajout'>
    
<label class='button-ajouter' for='offre'>
  <span>Publier</span>
</label>
    
    </header>
<section class='offres'>
<?php

require('../../vues/sidebar_admin.php');

?>


<div class='titre-center'>
<?php

require('../../vues/errors/ajout-offre.php');

?>

<form  class='ajout-offre' enctype= 'multipart/form-data' method="POST" action='/valarep/admin/index.php?action=ajout-offres'>

<h2 class='titre-offres'>Ajouter une offre</h2>

<div class="container-admin">


<div class='champs-formulaire'>
<label><div class='trait-bleu'></div>Nom de l'offre</label>
  <input class='nom' name='titre' type='text' placeholder="Titre de l'article" />
</div>

<div class='trait-gris-separateur'></div>


<div class='champs-formulaire'>
<label><div class='trait-bleu'></div>Description de l'offre</label>
  <textarea class='description' name='contenu' placeholder='Ecrivez ici'></textarea>
</div>
<div class='trait-gris-separateur'></div>

<div class='champs-formulaire'>
<label><div class='trait-bleu'></div>Type d'offres</label>
 <select name='genre' class='select'>
  <option value='informatique'>Informatique</option>
  <option value='industrie'>Industrie</option>
  <option value='restauration'>Restauration</option>
  <option value='batiments'>Batiments</option>
 </select>
</div>
<div class='trait-gris-separateur'></div>
<h3 class='titre-personne'>Personne à contacter</h3>



<div class='champs-formulaire'>
<label><img class='icon-fleche' src='/valarep/images/icon-f.png'/>Nom Prénom</label>
  <input type='text' class='personne' name='personne' placeholder='Exemple : Mr Emanuel David'/>
</div>

<div class='champs-formulaire'>
<label><img class='icon-fleche' src='/valarep/images/icon-f.png'/>Numéro de téléphone</label>
  <input type='text' class='telephone' name='telephone' placeholder='Numéro de téléphone'/>
</div>


 
</div>
<input class='ajouter' name='publier' type='submit' value='publier' id='offre'/>
  </form>  



</div>
</div>

</section>

<?php

}else{
  header("Location: /valarep/admin");
}
include('../../vues/scripts.php');
?>