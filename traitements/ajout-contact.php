<?php

require('../config/bdd.php');


if(isset($_POST['publier'])){


$avatar = htmlspecialchars($_FILES['avatar']['name']);
$nom = htmlspecialchars($_POST['nom']);
$fonction = htmlspecialchars($_POST['fonction']);
$telephone = htmlspecialchars($_POST['telephone']);


$req = $pdo->prepare("INSERT INTO contacts(nom, fonction, telephone) VALUES( ?, ?, ?)");
$req->execute(array($nom, $fonction, $telephone));


$idContact = $pdo->prepare("SELECT * FROM contacts WHERE nom = ? AND fonction = ? AND telephone = ?");
    $idContact->execute(array($nom, $fonction, $telephone));
    
    $id = $idContact->fetch();

if(isset($avatar) AND !empty($avatar)){
    $taillemax = 10097152;
    $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
    if($_FILES['avatar']['size'] <= $taillemax){
        
        $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
        if(in_array($extensionUpload, $extensionsValides)){
            

            $chemin = "../images_uploads/avatars_contacts/avatar".$id['id'] .'.'.$extensionUpload ;
            $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
            if($resultat){
                
                $updateavatar = $pdo->prepare('UPDATE contacts SET avatar = :avatar WHERE id = :id');
                $updateavatar->execute(array(
                'avatar' => 'avatar'.$id['id'] .'.'.$extensionUpload,
                'id' => $id['id']
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

if(isset($msg)){
    $_SESSION['error_ajout_contact'] = $msg;
    header("Location: /valarep/admin/contact/ajout-contact.php");
    
   
    
   
      
   }

?>
