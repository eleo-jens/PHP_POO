<?php

//il faudrait le faire en AJAX

include_once "./vendor/autoload.php";
$id = $_GET['id']; // param dans l'url

$objetConnexion = new Connexion();
$cnx = Connexion::getPdo();

$filmManager = new FilmManager($cnx);
$filmManager->delete($filmManager->find($id));

// une fois qu'on sait que la page fonctionne
header ('location: ./index.php?p=listeFilms');