<?php

require('../../vues/head_admin.php');

?>
<header class='page-ajout'>
    
    <form method="POST" action='index.php?action=ajout-offre'>
    <input class='ajouter' name='publier' type='submit' value='publier'/>
    
    </form>
    
    </header>
<section class='offres'>
<?php

require('../../vues/sidebar_admin.php');

?>


<div class='titre-center'>

<h2 class='titre-offres'>Ajouter une offre</h2>

<form class='ajout-offre' action ="index.php?action=ajout-offres" type='POST' enctype= 'multipart/form-data'>
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
 <select class='select'>
  <option>Informatique</option>
  <option>Industrie</option>
  <option>Restauration</option>
  <option>Batiments</option>
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


 
 
 
  </form>  



</div>
</div>

</section>