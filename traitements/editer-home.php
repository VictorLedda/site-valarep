<?php

require("../config/bdd.php");
if (isset($_POST['editer-home'])){


if(isset($_POST['informatique'])){

    $new_description_informatique = htmlspecialchars($_POST['informatique']);

    $UpdateHome = $pdo->prepare("UPDATE home SET TextInformatique = ? WHERE id = 1");
$UpdateHome->execute(array($new_description_informatique));


}

if(isset($_POST['batiments'])){

    $new_description_batiments = htmlspecialchars($_POST['batiments']);

    $UpdateHome = $pdo->prepare("UPDATE home SET TextBatiments = ? WHERE id = 1");
$UpdateHome->execute(array($new_description_batiments));


}

if(isset($_POST['restauration'])){

    $new_description_restauration = htmlspecialchars($_POST['restauration']);

    $UpdateHome = $pdo->prepare("UPDATE home SET TextRestauration = ? WHERE id = 1");
$UpdateHome->execute(array($new_description_restauration));


}
if(isset($_POST['text-role'])){

    $new_text_role = htmlspecialchars($_POST['text-role']);

    $UpdateHome = $pdo->prepare("UPDATE home SET TextRole = ? WHERE id = 1");
$UpdateHome->execute(array($new_text_role));


}

if(isset($_POST['text-dampierre'])){

    $new_text_dampierre = htmlspecialchars($_POST['text-role']);

    $UpdateHome = $pdo->prepare("UPDATE home SET TextDampierre = ? WHERE id = 1");
$UpdateHome->execute(array($new_text_dampierre));


}




    if(isset($_FILES['img-role']['name']) AND !empty($_FILES['img-role']['name'])){
       
        $taillemax = 100097152;
        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
        if($_FILES['img-role']['size'] <= $taillemax){
            
            $extensionUpload = strtolower(substr(strrchr($_FILES['img-role']['name'], '.'), 1));
            if(in_array($extensionUpload, $extensionsValides)){
                
    
                $chemin = "../images_uploads/home/role.".$extensionUpload ;
                $resultat = move_uploaded_file($_FILES['img-role']['tmp_name'], $chemin);
                if($resultat){
                    
                    $updateimage = $pdo->prepare('UPDATE home SET ImgRole = :ImgRole WHERE id = :id');
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



        if(isset($_FILES['img-dampierre']['name']) AND !empty($_FILES['img-dampierre']['name'])){
       
            $taillemax = 100097152;
            $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
            if($_FILES['img-dampierre']['size'] <= $taillemax){
                
                $extensionUpload = strtolower(substr(strrchr($_FILES['img-dampierre']['name'], '.'), 1));
                if(in_array($extensionUpload, $extensionsValides)){
                    
        
                    $chemin = "../images_uploads/home/dampierre.".$extensionUpload ;
                    $resultat = move_uploaded_file($_FILES['img-dampierre']['tmp_name'], $chemin);
                    if($resultat){
                        
                        $updateimage = $pdo->prepare('UPDATE home SET ImgDampierre = :ImgDampierre WHERE id = :id');
                        $updateimage->execute(array(
                        'ImgDampierre' => 'dampierre.'.$extensionUpload,
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

header("Location: /valarep/admin/home/");




?>