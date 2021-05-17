<?php

require("../config/bdd.php");
if (isset($_POST['update-partenaires'])){

    if(isset($_POST['text-partenaires'])){

        $new_text_partenaires = htmlspecialchars($_POST['text-partenaires']);
    
        $UpdateHome = $pdo->prepare("UPDATE home SET TextPartenaires = ? WHERE id = 1");
    $UpdateHome->execute(array($new_text_partenaires));
    
    
    }
    
    if(isset($_FILES['new-logo']['name']) AND !empty($_FILES['new-logo']['name'])){
       
        


        $taillemax = 100097152;
        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
        if($_FILES['new-logo']['size'] <= $taillemax){
            
            $extensionUpload = strtolower(substr(strrchr($_FILES['new-logo']['name'], '.'), 1));
            if(in_array($extensionUpload, $extensionsValides)){
                
    
                $chemin = "../images_uploads/home/images_uploads/partenaires/$_FILES['new-logo']['name'].".$extensionUpload ;
                $resultat = move_uploaded_file($_FILES['new-logo']['tmp_name'], $chemin);
                if($resultat){
                    
                    $updateimage = $pdo->prepare('UPDATE partenaires SET ImgRole = :ImgRole WHERE id = :id');
                    $updateimage->execute(array(
                    'ImgRole' => 'role.'.$extensionUpload,
                    'id' => 1
                    ));
    
                   
                   
                }
                else{
                    $msg_f_pros = "Erreur pendant l'importation du fichier";
                }
            }
            else{
                $msg_f_pros = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
            }
        }
        else{
            $msg_f_pros = "Votre photo de profil ne doit pas depasser 2 Mega Octets";
        }
        }
        else{
            $msg_f_pros = "Il y a une erreur";
        }


}