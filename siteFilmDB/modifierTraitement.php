<?php

include_once "./vendor/autoload.php";

$objetConnexion = new Connexion();
$cnx = Connexion::getPdo();

$filmManager = new FilmManager($cnx);
$film = new Film($_POST);

$filmManager->update($film);

// var_dump($stmt->errorInfo());

header('location: ./index.php?p=listeFilms');