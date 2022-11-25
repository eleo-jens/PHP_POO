<?php

spl_autoload_register(
    function ($nomClasse) {
        // renvoi le nom de la classe qui se trouve après le new dans notre main
        // echo $nomClasse;
        // include_once "./classes/". $nomClasse. ".class.php";
        // include_once "./classes/'$nomClasse'.class.php";

        $nomFichier = "./classes/{$nomClasse}.class.php";
        if (file_exists($nomFichier)) {
            include_once $nomFichier;
        }
        else { 
            throw new Exception ("Le fichier de la classe ${nomClasse} n'existe pas");
        }
    }
);
