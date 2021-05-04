<?php

require('../config/bd.php');
$idContact = $_GET['idContact'];

$deleteContenu = $pdo->prepare('DELETE FROM contacts WHERE id = :id');
        $deleteContenu->execute(array(
        'id' => $idContenu
        ));

header("Location : ");    
?>