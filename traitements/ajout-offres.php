<?php

require("../config/bdd.php");
if (isset($_POST['publier'])){


$titre = htmlspecialchars($_POST['titre']);
$contenu = htmlspecialchars($_POST['contenu']);
$genre = htmlspecialchars($_POST['genre']);
$personne = htmlspecialchars($_POST['personne']);
$telephone = htmlspecialchars($_POST['telephone']);


$req = $pdo->prepare("INSERT INTO offres(nom, description, genre, personne, telephone) VALUES( ?, ?, ?, ?, ?)");
$req->execute(array($titre, $contenu, $genre, $personne, $telephone));

header("Location: /valarep/admin/offres/ajout-offre.php");

}
?>
