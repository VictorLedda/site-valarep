<?php
session_start();
if(isset($_SESSION['id'])){


require('../../vues/head_admin.php');

?>





<?php

require('../../vues/sidebar_admin.php');

?>





<?php
}
include('../../vues/scripts.php');

?>
