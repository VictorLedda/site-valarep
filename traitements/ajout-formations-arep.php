<?php

require('../config/bdd.php');
$_SESSION['error'] = null;

if(isset($_POST['publier'])){


$image = htmlspecialchars($_FILES['image']['name']);
$documentation = htmlspecialchars($_FILES['documentation']['name']);
$titre = htmlspecialchars($_POST['titre']);
$genre = htmlspecialchars($_POST['genre']);


$reqTitre = $pdo->prepare("SELECT * FROM formationsarep WHERE titre = ? ");
    $reqTitre->execute(array($titre));
    $TitreVerif = $reqTitre->fetch();

if($TitreVerif['titre'] == $titre){
    $msg = 'Attention vous ne pouvez pas avoir 2 fois le même titre pour une formation';
    
}else{

$req = $pdo->prepare("INSERT INTO formationsarep(titre, genre) VALUES( ?, ?)");
$req->execute(array($titre, $genre));


$idFormationPros = $pdo->prepare("SELECT * FROM formationsarep WHERE titre = ? AND genre = ?");
    $idFormationPros->execute(array($titre, $genre));
    $idFormationProfesionelle = $idFormationPros->fetch();


$taillemax = 10097152;
if(isset($image) AND !empty($image)){
    
    $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
    if($_FILES['image']['size'] <= $taillemax){
        
        $extensionUpload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
        if(in_array($extensionUpload, $extensionsValides)){
            

            $chemin = "../images_uploads/Formation_AREP/images/Formation_AREP".$idFormationProfesionelle['id'] .'.'.$extensionUpload ;
            $resultat = move_uploaded_file($_FILES['image']['tmp_name'], $chemin);
            if($resultat){
                
                $updateimage = $pdo->prepare('UPDATE formationsarep SET image = :image WHERE id = :id');
                $updateimage->execute(array(
                'image' => 'Formation_AREP'.$idFormationProfesionelle['id'] .'.'.$extensionUpload,
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
       
        $taillemax = 10097152;
        $extensionsValidesPdf = array('pdf', 'doc');
        if($_FILES['documentation']['size'] <= $taillemax){
            
            $extensionUpload = strtolower(substr(strrchr($_FILES['documentation']['name'], '.'), 1));
            if(in_array($extensionUpload, $extensionsValidesPdf)){
                
    
                $chemin = "../images_uploads/Formation_AREP/documentations/Formation_AREP".$idFormationProfesionelle['id'] .'.'.$extensionUpload ;
                $resultat = move_uploaded_file($_FILES['documentation']['tmp_name'], $chemin);
                if($resultat){
                    
                    $updateimage = $pdo->prepare('UPDATE formationsarep SET documentation = :documentation WHERE id = :id');
                    $updateimage->execute(array(
                    'documentation' => 'Formation_AREP'.$idFormationProfesionelle['id'] .'.'.$extensionUpload,
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
    

        header("Location: /valarep/admin/formations/apprentissage.php");

}
}
if(isset($msg)){
 $_SESSION['error_f_arep'] = $msg;
  header("Location: /valarep/admin/formations/apprentissage.php");
 

 

   
}

?>
