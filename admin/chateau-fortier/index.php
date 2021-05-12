<?php
session_start();
if(isset($_SESSION['id'])){

require('../../vues/head_admin.php');

?>
<?php

require('../../vues/sidebar_admin.php');

?>
<label class='update ajout-image' for='submit-ajout-image'>Publier</label>
<section class='ajout-image-chateau'>


    <div class='titre-center'>
    <h2 class='titre-ajout-image'>Ajouter une image du chateau</h2>
    </div>

    <form class='form-ajout-image' enctype= 'multipart/form-data' method="POST" action='/valarep/admin/index.php?action=image-chateau'>
    <input id='submit-ajout-image' class='displayNone' type='submit' name='publier' value='Publier' />

    <label class=' label-ajout-image-chateau'  for='ajout-image'>
    <img class=' img-ajout-image-chateau' src='/valarep/images/image-default.PNG'/>
    </label>
    <input id='ajout-image' name='image-chateau'  type='file' class='displayNone'/>
    <input placeholder='Description de l image' class='description-image' name='description'  type='text'/>
    </form>

</section>

<?php

}else{
  header("Location: /valarep/admin");
}
include('../../vues/scripts.php');
?>