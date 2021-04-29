<?php
require('../vues/head_admin.php');
require('../config/bdd.php');
$erreurs = null;



   


$identifiant =  htmlspecialchars($_POST['inscription-identifiant']);
$mdp1 =  htmlspecialchars(sha1($_POST['inscription-mdp1']));
$mdp2 =  htmlspecialchars(sha1($_POST['inscription-mdp2']));
$photo =  htmlspecialchars($_FILES['inscription-photo']['name']);



     
if( $mdp1 == $mdp2){
  
    $insertion = $pdo->prepare('INSERT INTO user(identifiant, mdp, photo) VALUES( ?, ?, ?)');
    $insertion->execute(array($identifiant, $mdp1, $photo));
    
    $req = $pdo->prepare("SELECT * FROM user WHERE identifiant = ? AND mdp = ?");
    $req->execute(array($identifiant, $mdp1));
    
    $userinfo = $req->fetch();
   
    $_SESSION['id'] = $userinfo['id'];
    header("Location: index.php?action=accueil&id=".$userinfo['id']);

    


}


?>