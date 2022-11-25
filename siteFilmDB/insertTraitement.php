<?php

//1. Obtenir la connexion
include "./vendor/autoload.php";
$objetConnexion = new Connexion();
$cnx = Connexion::getPdo();
var_dump($cnx);

//2. Obtenir les données 
// var_dump($_POST);

$data = $_POST;
var_dump($data);
// die();
$f1 = new Film($data);


//3. Insérer dans la BD en utilisant un Manager
$filmManager = new FilmManager($cnx);
$filmManager->insert($f1);

die();

// redirige vers la liste de films après une insertion
header("location: ./index.php?p=listeFilms")

?>