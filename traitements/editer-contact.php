<?php

require('../config/bdd.php');
$idContact = $_GET['idContact'];

$nbr_contacts = $pdo->query("SELECT COUNT(*) FROM contacts");
$item = $nbr_contacts->fetch();

$MinId = $pdo->query("SELECT MIN(id) FROM contacts");
$idMinimum = $MinId->fetch();




 echo $item[0];
 echo $idMinimum[0];
$nbr = $_GET['idContact'];


$newFonction = htmlspecialchars($_POST['new-fonction'.$nbr]);

echo $newFonction;

$UpdateFonction = $pdo->prepare("UPDATE contacts SET fonction = ? WHERE id = ?");
$UpdateFonction->execute(array($newFonction, $nbr));



$newTel = htmlspecialchars($_POST['new-tel'.$nbr]);


$UpdateTel= $pdo->prepare("UPDATE contacts SET telephone = ? WHERE id = ?");
$UpdateTel->execute(array($newTel, $nbr));




$newNom = htmlspecialchars($_POST['new-nom'.$nbr]);


$UpdateNom = $pdo->prepare("UPDATE contacts SET nom = ? WHERE id = ?");
$UpdateNom->execute(array($newNom, $nbr));






$avatar = $_FILES['new-avatar'.$nbr]['name'];


        if(isset($avatar) AND !empty($avatar)){
               
          
               
                $taillemax = 100097152;
                
                if($_FILES['new-avatar'.$nbr]['size'] <= $taillemax){
                     
                        
                        $extensionUpload = strtolower(substr(strrchr($_FILES['new-avatar'.$nbr]['name'], '.'), 1));
  
                        $chemin = "../images_uploads/avatars_contacts/avatar".$idContact .'.'.$extensionUpload ;
                        $resultat = move_uploaded_file($_FILES['new-avatar'.$nbr]['tmp_name'], $chemin);
                        if($resultat){
                           
                            $updateavatar = $pdo->prepare('UPDATE contacts SET avatar = :avatar WHERE id = :id');
                            $updateavatar->execute(array(
                            'avatar' => 'avatar'.$nbr .'.'.$extensionUpload,
                            'id' => $nbr
                            ));
            
        
                           
                           
                        }
                        else{
                            $msg = "Erreur pendant l'importation du fichier";
                        }
                    
                   
                }
                else{
                    $msg = "Votre photo de profil ne doit pas depasser 2 Mega Octets";
                }
        }
                else{
                    $msg = "Il y a une erreur";
                }
        
             
        
                header("Location: /valarep/admin/contact/tous-les-contacts.php");
        
  

      
?>