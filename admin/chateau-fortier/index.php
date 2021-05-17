<?php
session_start();
if(isset($_SESSION['id'])){

require('../../vues/head_admin.php');
$reqImages = $pdo->query("SELECT * FROM chateau");
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
<h2 class='titre-editer-photos-chateau'>Editer les images du chateau</h2>
<section class='supp-photos-chateau'>
<?php

while($i = $reqImages->fetch()){


  ?>
<div class='supp-photo-chateau'>

<img class='img-supp-photo' src='/valarep/images_uploads/chateau-fortier/<?= $i['image']; ?>'/>

<div class='infos-chateau'>
  <div class='labels-update'>
<label for='supprimer-image' class='label-corbeille-formations  '>Supprimer une image</label>
<label class='label-icon-check' for='update-description<?= $i['id'];  ?>'>Mettre à jour</label>

</div>


<form method='POST' enctype= 'multipart/form-data' action='/valarep/admin/index.php?action=editer-photo-chateau&supp=1&idImage=<?= $i['id'];   ?>'>
<input id='supprimer-image' name='supprimer' class='bouton-supprimer' type='submit' value='supprimer' />
</form>

<form method='POST' enctype= 'multipart/form-data' action='/valarep/admin/index.php?action=editer-photo-chateau&supp=0&idImage=<?= $i['id'];   ?>'>
<input id='update-description<?= $i['id'];  ?>' name='update' class='displayNone' type='submit' value='Mettre à jour' />
<div><img class='icon-editer editer' src='/valarep/images/editer-bleu.PNG'/>
<span class='span-coordonees font-Architects'>
<input class='bouton-editer input-modif displayNone' name='<?= "new-description".$i['id'] ?>' type='text' value='<?=  $i['description'];  ?>'/>
<span class='input-non-modif'> <?=  $i['description'];  ?></span></span></div>
</div>

</form>

</div>
</div>
<div class='trait-gris-supprimer-image'></div>

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