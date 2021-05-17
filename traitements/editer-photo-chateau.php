<?php

require('../config/bdd.php');
$idImage = $_GET['idImage'];

if($_GET['supp'] ==  1){
    $deleteImages = $pdo->prepare('DELETE FROM chateau WHERE id = :id');
        $deleteImages->execute(array(
        'id' => $idImage
        ));
  

        header("Location: /valarep/admin/chateau-fortier/");

        
}else{

    $newDescription = htmlspecialchars($_POST['new-description'.$idImage]);

echo $newDescription;
$UpdateDescription= $pdo->prepare("UPDATE chateau SET description = ? WHERE id = ?");
$UpdateDescription->execute(array($newDescription, $idImage));

}



        
?>