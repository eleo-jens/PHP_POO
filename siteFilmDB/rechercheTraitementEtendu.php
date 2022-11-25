<?php

include "./vendor/autoload.php";

$objetConnexion = new Connexion();
$cnx = Connexion::getPdo();
$filmManager = new FilmManager ($cnx);

$titre = $_POST['titre'];
$resultat = $filmManager->findByTitre($titre);
var_dump($resultat);

if (count($resultat) > 0){
        foreach ($resultat as $film){
                echo "<br>Titre: " . $film->getTitre();
                echo "<br>Description: " . $film->getDescription();
        }
}
else {
        echo "<h5>On n'a pas trouvé de films</h5>";
}
