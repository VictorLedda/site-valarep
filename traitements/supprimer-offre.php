<?php

require('../config/bdd.php');
$idOffre = $_GET['idOffre'];

$deleteContenu = $pdo->prepare('DELETE FROM offres WHERE id = :id');
        $deleteContenu->execute(array(
        'id' => $idOffre
        ));
  

        header("Location: /valarep/admin/offres/toutes-les-offres.php");
?>