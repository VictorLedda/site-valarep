<?php

if(isset($_SESSION['error'])){
  $errors = $_SESSION['error'];
  echo "<div class='error'/>
  <img class='interdit' src='/valarep/images/interdit.jpg'/>
  <span>$errors</span>
  <img class='croix' src='/valarep/images/croix.PNG'/>
  </div>";
}

?>
