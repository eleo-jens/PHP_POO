<?php

include "./connexion/db.php";

class Connexion
{

    private static PDO $pdo;

    public function __construct()
    {
    }

    /**
     * Get the value of pdo
     */ 
    public static function getPdo()
    {
        // la première fois isset renverra false car la variable $pdo n'a pas été initialisée
        if (!isset (self::$pdo)){
            //créer la connexion
            try {
                //chargement du serveur: attention à la limite de connexion
                self::$pdo = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
            } catch (Exception $e) {
                // jamais en production car ça montre des infos
                // sensibles
                echo $e->getMessage();
    
                // il faut arreter le script quand on a attrapé une exception
                die();
            }
        }
        // la connexion existe, on la renvoi
        return self::$pdo;
    }
}
