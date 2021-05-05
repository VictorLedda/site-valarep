<?php

require('../config/bdd.php');
$idContact = $_GET['idContact'];

$deleteContenu = $pdo->prepare('DELETE FROM contacts WHERE id = :id');
        $deleteContenu->execute(array(
        'id' => $idContact
        ));
  

        header("Location: /valarep/admin/contact/tous-les-contacts.php");
?>