<?php

require('../config/bdd.php');


if(isset($_POST['publier'])){


$image = htmlspecialchars($_FILES['image']['name']);
$documentation = htmlspecialchars($_FILES['documentation']['name']);
$titre = htmlspecialchars($_POST['titre']);
$genre = htmlspecialchars($_POST['genre']);



$req = $pdo->prepare("INSERT INTO formationsprofessionelles(titre, genre) VALUES( ?, ?)");
$req->execute(array($titre, $genre));


$idFormationPros = $pdo->prepare("SELECT * FROM formationsprofessionelles WHERE titre = ? AND genre = ?");
    $idFormationPros->execute(array($titre, $genre));
    $idFormationProfesionelle = $idFormationPros->fetch();

if(isset($image) AND !empty($image)){
    $taillemax = 2097152;
    $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
    if($_FILES['image']['size'] <= $taillemax){
        
        $extensionUpload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
        if(in_array($extensionUpload, $extensionsValides)){
            

            $chemin = "../images_uploads/Formation_Professionelles/images/formations_professionelle".$idFormationProfesionelle['id'] .'.'.$extensionUpload ;
            $resultat = move_uploaded_file($_FILES['image']['tmp_name'], $chemin);
            if($resultat){
                
                $updateimage = $pdo->prepare('UPDATE formationsprofessionelles SET image = :image WHERE id = :id');
                $updateimage->execute(array(
                'image' => 'formations_professionelle'.$idFormationProfesionelle['id'] .'.'.$extensionUpload,
                'id' => $idFormationProfesionelle['id']
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

    if(isset($documentation) AND !empty($documentation)){
        $taillemax = 2097152;
        $extensionsValides = array('pdf');
        if($_FILES['documentation']['size'] <= $taillemax){
            
            $extensionUpload = strtolower(substr(strrchr($_FILES['documentation']['name'], '.'), 1));
            if(in_array($extensionUpload, $extensionsValides)){
                
    
                $chemin = "../images_uploads/Formation_Professionelles/documentations/formations_professionelle".$idFormationProfesionelle['id'] .'.'.$extensionUpload ;
                $resultat = move_uploaded_file($_FILES['image']['tmp_name'], $chemin);
                if($resultat){
                    
                    $updateimage = $pdo->prepare('UPDATE formationsprofessionelles SET image = :image WHERE id = :id');
                    $updateimage->execute(array(
                    'image' => 'formations_professionelle'.$idFormationProfesionelle['id'] .'.'.$extensionUpload,
                    'id' => $idFormationProfesionelle['id']
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
    

header("Location: /valarep/admin/contact/ajout-contact.php");

}

?>
