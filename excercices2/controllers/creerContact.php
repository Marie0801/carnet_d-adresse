<?php

include '../configuration/config.php';
include '../models/contact.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$descrip = $_POST['descrip'];

$contact = new Contact ($nom, $prenom, $numero, $email, $descrip);

if ($contact -> creerContact()) {
    header("Location:../views/formulaire.php");
}
?>