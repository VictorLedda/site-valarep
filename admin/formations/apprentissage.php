<?php

require('../../vues/head_admin.php');

?>
<header class='page-ajout'>
    
    <form method="POST" action='index.php?action=ajout-formations-professionelles'>
    <input class='ajouter' name='publier' type='submit' value='publier'/>
    
    </form>
    
    </header>
<section class='formations'>
<?php

require('../../vues/sidebar_admin.php');

?>


<div class='titre-center'>

<h2 class='titre-offres'>Ajouter une formation professionnelle</h2>

<form class='ajout-offre' action ="index.php?action=ajout-formations-professionelles" type='POST' enctype= 'multipart/form-data'>





<div class='champs-formulaire'>
<label><div class='trait-bleu'></div>Image mise en avant</label>
<img class='image-default' src='/valarep/images/image-default.png'/>
</div>

<div class='trait-gris-separateur'></div>

<div class='champs-formulaire'>
<label><div class='trait-bleu'></div>Nom de la formation</label>
  <input class='nom' name='titre' type='text' placeholder="Nom de la formation" />
</div>

<div class='trait-gris-separateur'></div>

<div class='champs-formulaire'>
<label><div class='trait-bleu'></div>Type de formation</label>
 <select class='select'>
  <option>Industrie</option>
  <option>Batiments</option>
  <option>Restauration</option>
  <option>Industrie</option>
 </select>
</div>
<div class='trait-gris-separateur'></div>


<label class='bouton-personnalise'>
<img class='image-default' src='/valarep/images/ajout-doc-bleu.png'/>
<span>Ajouter de la documentation</span>
</label>
 
 
 
  </form>  



</div>
</div>

</section>