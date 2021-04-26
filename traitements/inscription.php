<?php
require('config/bd.php');
$erreurs = null;

if(isset($_POST['inscription-bouton'])){

   

$login_inscription = htmlspecialchars($_POST['inscription-login']);
$mail1 = htmlspecialchars($_POST['inscription-adresse-mail1']);
$mail2 = htmlspecialchars($_POST['inscription-adresse-mail2']);
$mdp1 =  htmlspecialchars(sha1($_POST['inscription-mdp1']));
$mdp2 =  htmlspecialchars(sha1($_POST['inscription-mdp2']));



     
if( $mail1 == $mail2 && $mdp1 == $mdp2){
    $bio = "Je suis nouveau sur ce réseau social, quelqu' un peut m'aider";
    $insertion = $pdo->prepare('INSERT INTO user(login, mdp, email, bio) VALUES( ?, ?, ?, ?)');
    $insertion->execute(array($login_inscription, $mdp1, $mail1, $bio));
    
    $req = $pdo->prepare("SELECT * FROM user WHERE login = ? AND mdp = ?");
    $req->execute(array($login_inscription, $mdp1));
    
    $userinfo = $req->fetch();
    $_SESSION['id'] = $userinfo['id'];
    header("Location: index.php?action=accueil&id=".$userinfo['id']."&ProfilActif=".$_SESSION['id']);

    
}else{
$erreurs = "Il y a une erreur";
                            }
                        }      

if(isset($erreurs)){
    echo $erreurs;
}


?>