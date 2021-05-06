<?php

require('../config/bdd.php');






if($_GET['formations'] == "arep"){
$nbr = $_GET['idContact'];


$newTitre = htmlspecialchars($_POST['new-titre'.$nbr]);


$UpdateFonction = $pdo->prepare("UPDATE formationsarep SET titre = ? WHERE id = ?");
$UpdateFonction->execute(array($newTitre, $nbr));










$image = $_FILES['new-image-arep'.$nbr]['name'];

$taillemax = 10097152;
if(isset($image) AND !empty($image)){
    
    $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
    if($_FILES['new-image-arep'.$nbr]['size'] <= $taillemax){
        
        $extensionUpload = strtolower(substr(strrchr($_FILES['new-image-arep'.$nbr]['name'], '.'), 1));
        if(in_array($extensionUpload, $extensionsValides)){
            


            $chemin = "../images_uploads/Formation_AREP/images/Formation_AREP".$nbr .'.'.$extensionUpload ;
            $resultat = move_uploaded_file($_FILES['new-image-arep'.$nbr]['tmp_name'], $chemin);
           
            $updateimageArep = $pdo->prepare('UPDATE formationsarep SET image = :image WHERE id = :id');
            $updateimageArep->execute(array(
            'image' => 'Formation_AREP'.$nbr .'.'.$extensionUpload,
            'id' => $nbr
            ));

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
             
        

    $documentation = $_FILES['new-doc-arep'.$nbr]['name'];

$taillemax = 10097152;
if(isset($documentation) AND !empty($documentation)){
       
    $taillemax = 10097152;
    $extensionsValidesPdf = array('pdf', 'doc');
    if($_FILES['new-doc-arep'.$nbr]['size'] <= $taillemax){
        
        $extensionUpload = strtolower(substr(strrchr($_FILES['new-doc-arep'.$nbr]['name'], '.'), 1));
        if(in_array($extensionUpload, $extensionsValidesPdf)){
            

            $chemin = "../images_uploads/Formation_AREP/documentations/Formation_AREP".$nbr .'.'.$extensionUpload ;
            $resultat = move_uploaded_file($_FILES['new-doc-arep'.$nbr]['tmp_name'], $chemin);
            if($resultat){
                
                $updateimage = $pdo->prepare('UPDATE formationsarep SET documentation = :documentation WHERE id = :id');
                $updateimage->execute(array(
                'documentation' => 'Formation_AREP'.$nbr .'.'.$extensionUpload,
                'id' => $nbr
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

    header("Location: /valarep/admin/formations/toutes-formations.php");

    
}

if($_GET['formations'] == "pros"){
    $nbr = $_GET['idContact'];
  
    
    $newTitrePros = htmlspecialchars($_POST['new-titre-pros'.$nbr]);
    
    
    $UpdateFonction = $pdo->prepare("UPDATE formationsprofessionelles SET titre = ? WHERE id = ?");
    $UpdateFonction->execute(array($newTitrePros, $nbr));
    
    
    
    
    
    
    
    
    
    
    $image = $_FILES['new-image-pros'.$nbr]['name'];
    
    $taillemax = 10097152;
    if(isset($image) AND !empty($image)){
        
        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
        if($_FILES['new-image-pros'.$nbr]['size'] <= $taillemax){
            echo $image;
            $extensionUpload = strtolower(substr(strrchr($_FILES['new-image-pros'.$nbr]['name'], '.'), 1));
            if(in_array($extensionUpload, $extensionsValides)){
                
    
                $chemin = "../images_uploads/Formation_Professionelles/images/formations_professionelle".$nbr .'.'.$extensionUpload ;
                $resultat = move_uploaded_file($_FILES['new-image-pros'.$nbr]['tmp_name'], $chemin);
               

                $updateimagePro = $pdo->prepare('UPDATE formationsprofessionelles SET image = :image WHERE id = :id');
                $updateimagePro->execute(array(
                'image' => 'formations_professionelle'.$nbr .'.'.$extensionUpload,
                'id' => $nbr
                ));
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
                 
           
    
        $documentation = $_FILES['new-doc-pros'.$nbr]['name'];
    
    $taillemax = 10097152;
    if(isset($documentation) AND !empty($documentation)){
           
        $taillemax = 10097152;
        $extensionsValidesPdf = array('pdf', 'doc');
        if($_FILES['new-doc-pros'.$nbr]['size'] <= $taillemax){
            
            $extensionUpload = strtolower(substr(strrchr($_FILES['new-doc-pros'.$nbr]['name'], '.'), 1));
            if(in_array($extensionUpload, $extensionsValidesPdf)){
                
    
                $chemin = "../images_uploads/Formation_Professionelles/documentations/formations_professionelle".$nbr .'.'.$extensionUpload ;
                $resultat = move_uploaded_file($_FILES['new-doc-pros'.$nbr]['tmp_name'], $chemin);
                if($resultat){
                    
                    $updateimage = $pdo->prepare('UPDATE formationsprofessionelles SET documentation = :documentation WHERE id = :id');
                    $updateimage->execute(array(
                    'documentation' => 'formations_professionelle'.$nbr .'.'.$extensionUpload,
                    'id' => $nbr
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


          header("Location: /valarep/admin/formations/toutes-formations.php"); 
    }
      
   
?>