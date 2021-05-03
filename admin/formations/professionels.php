<?php
session_start();
if(isset($_SESSION['id'])){


require('../../vues/head_admin.php');

?>
<header class='page-ajout'>
    
<label class='button-ajouter' for='test'>
  <span>Publier</span>
</label>
    
    </header>
<section class='formations'>
<?php

require('../../vues/sidebar_admin.php');

?>


<div class='titre-center'>
<?php

require('../../vues/errors/f_pros.php');

?>


<h2 class='titre-professionelles'>Ajouter une formation professionnelle</h2>

<form name='form' class='ajout-offre' enctype= 'multipart/form-data' method="POST" action='/valarep/admin/index.php?action=professionelles'>
<input class='ajouter' name='publier' type='submit' value='publier' id='test'/>




<div class="container-admin">
<div class='champs-formulaire containerCustom'>
<label><div class='trait-bleu'></div>Image mise en avant</label>
<input class='file-avatar' name='image' type='file' id='image' />
<label for='image' class='label-image-default'><img class='image-default' src='/valarep/images/image-default.png'/></label>
</div>

<div class='trait-gris-separateur'></div>

<div class='champs-formulaire containerCustom'>
<label><div class='trait-bleu'></div>Nom de la formation</label>
  <input class='nom' name='titre' type='text' placeholder="Nom de la formation" />
</div>

<div class='trait-gris-separateur'></div>

<div class='champs-formulaire containerCustom'>
<label><div class='trait-bleu'></div>Type de formation</label>
 <select name='genre' class='select'>
  <option value='CAP'>CAP</option>
  <option value='Bac professionel'>Bac professionel</option>
  <option value='Titres pro'>Titres pro</option>
 </select>
</div>
<div class='trait-gris-separateur'></div>

<input class='file-doc' name='documentation' type='file' id='documentation' />
<label for='documentation' class='bouton-personnalise'>
<img class='icon-bouton-personnalise' src='/valarep/images/ajout-doc-bleu.png'/>
<span>Ajouter de la documentation</span>
</label>
 
</div>
<input class='ajouter' name='publier' type='submit' value='publier' id='test'/>
  </form>  



</div>
</div>

</section>


<?php
}else{

  header("Location: /valarep/admin");
}

?>

<?php


include('../../vues/scripts.php');

?>