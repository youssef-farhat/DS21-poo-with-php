<?php
include "classes/client.class.php";
include 'create.phtml';
if (!empty($_POST)) {

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$dateNaissance=$_POST['date'];
$adress=$_POST['adresse'];
$tel=$_POST['tel'];

$createClient= new Client();
$addClientsList = $createClient->addNewClient($nom, $prenom, $dateNaissance, $adress, $tel);
header('Location: index.php');
}













