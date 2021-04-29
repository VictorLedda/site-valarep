<?php

require("../config/bd.php");

$contenu = htmlspecialchars($_GET['contenu']);
$titre = htmlspecialchars($_GET['titre']);
$image = htmlspecialchars($_GET['image']);


$req = $pdo->prepare("INSERT INTO offres(titre, contenu, image) VALUES( ?, ?, ?)");
$req->execute(array($titre, $contenu, $image));

header("Location: /admin/ajout-articles.php");


?>
