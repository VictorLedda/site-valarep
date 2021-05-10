<?php


require('../config/bdd.php');


$nbr = $_GET['idOffre'];


$newNom = htmlspecialchars($_POST['new-nom'.$nbr]);

echo $newNom;

$UpdateNom = $pdo->prepare("UPDATE offres SET nom = ? WHERE id = ?");
$UpdateNom->execute(array($newNom, $nbr));



$newPersonne = htmlspecialchars($_POST['new-personne'.$nbr]);


$UpdatePersonne = $pdo->prepare("UPDATE offres SET personne = ? WHERE id = ?");
$UpdatePersonne->execute(array($newPersonne, $nbr));


$newTel = htmlspecialchars($_POST['new-telephone'.$nbr]);


$UpdateTel= $pdo->prepare("UPDATE offres SET telephone = ? WHERE id = ?");
$UpdateTel->execute(array($newTel, $nbr));


$newDescription = htmlspecialchars($_POST['new-description'.$nbr]);


$UpdateDescription= $pdo->prepare("UPDATE offres SET description = ? WHERE id = ?");
$UpdateDescription->execute(array($newDescription, $nbr));



header("Location: /valarep/admin/offres/toutes-les-offres.php");

?>
