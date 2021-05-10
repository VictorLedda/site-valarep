<?php
session_start();
if(isset($_SESSION['id'])){

require('../../vues/head_admin.php');

?>
<section class='reservations'>
<?php

require('../../vues/sidebar_admin.php');

?>
<div class='titre-center'>
<h2 class='titre-reservations'>Voici les réservations</h2>
</div>


</section>

<?php

}else{
  header("Location: /valarep/admin");
}
include('../../vues/scripts.php');
?>