<?php

if(isset($_SESSION['error'])){
  $errors = $_SESSION['error_ajout_contact'];
  echo "<div class='error'/>
  <img class='interdit' src='/valarep/images/interdit.jpg'/>
  <span>$errors</span>
  <img class='croix' src='/valarep/images/croix.PNG'/>
  </div>";
}

?>
