<?php
require('../config/bdd.php');


$_SESSION['error'] = null;

if(isset($_POST['publier'])){

    $image_chateau = htmlspecialchars($_FILES['image-chateau']['name']);
    $description = htmlspecialchars($_POST['description']);


    $insertDescription = $pdo->prepare("INSERT INTO chateau(description) VALUES(?) ");
    $insertDescription->execute(array($description));

    
    
    $reqImage = $pdo->prepare("SELECT * FROM chateau WHERE description= ? ");
    $reqImage->execute(array($description));
    $idImage = $reqImage->fetch();

    
   
    
    $taillemax = 100000097152;
    if(isset($image_chateau) ){
        
        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
        if($_FILES['image-chateau']['size'] <= $taillemax){
            
            $extensionUpload = strtolower(substr(strrchr($_FILES['image-chateau']['name'], '.'), 1));
            if(in_array($extensionUpload, $extensionsValides)){
                
                
                $chemin = "../images_uploads/chateau-fortier/image".$idImage['id'] .'.'.$extensionUpload ;
                $resultat = move_uploaded_file($_FILES['image-chateau']['tmp_name'], $chemin);
                if($resultat){
                    
                    $updateimage = $pdo->prepare('UPDATE chateau SET image = :image WHERE id = :id');
                    $updateimage->execute(array(
                    'image' => 'image'.$idImage['id'] .'.'.$extensionUpload,
                    'id' => $idImage['id']
                    ));
    
                   
                   
                }
                else{
                    $msg = "Erreur pendant l'importation du fichier";
                }
            }
            else{
                $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
            }
        }
        else{
            $msg = "Votre photo de profil ne doit pas depasser 2 Mega Octets";
        }
     }
        else{
            $msg = "Il y a une erreur";
        }
    }
      header("Location: /valarep/admin/chateau-fortier/"); 

?>