<?php
require('../vues/head_admin.php');
require('../config/bdd.php');

if(isset($_POST['connexion-bouton'])){
    $identifiant_connexion = htmlspecialchars($_POST['connexion-identifiant']);
    $motdepasse = sha1(htmlspecialchars($_POST['connexion-mdp']));

    if( !empty($_POST['connexion-identifiant'] AND  !empty($_POST['connexion-mdp']))){

        

        $req = $pdo->prepare("SELECT * FROM user WHERE identifiant = ? AND mdp = ?");
$req->execute(array($identifiant_connexion , $motdepasse));
$reqconnect = $req->rowCount(); 



if( $reqconnect  == 1){
$userinfo = $req->fetch();
session_start();
    $_SESSION['id'] = $userinfo['id'];
   
    
  
    header("Location: index.php?action=accueil&id=".$userinfo['id']);
}
else{
    $erreur="Vos identifiants ne sont pas bons";
}
    }
}




?>