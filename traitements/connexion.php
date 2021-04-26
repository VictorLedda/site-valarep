<?php
require('config/bd.php');
if(isset($_POST['connexion-bouton'])){
    $login_connexion = htmlspecialchars($_POST['connexion-login']);
    $motdepasse = sha1(htmlspecialchars($_POST['connexion-mdp']));

    if( !empty($_POST['connexion-login'] AND  !empty($_POST['connexion-mdp']))){

        

        $req = $pdo->prepare("SELECT * FROM user WHERE login = ? AND mdp = ?");
$req->execute(array($login_connexion , $motdepasse));
$reqconnect = $req->rowCount(); 



if( $reqconnect  == 1){
$userinfo = $req->fetch();
session_start();
    $_SESSION['id'] = $userinfo['id'];
    $_SESSION['email'] = $userinfo['email'];
    
  
header("Location: index.php?action=accueil&id=".$userinfo['id']."&ProfilActif=".$_SESSION['id']);
}
else{
    $erreur="Vos identifiants ne sont pas bons";
}
    }
}




?>