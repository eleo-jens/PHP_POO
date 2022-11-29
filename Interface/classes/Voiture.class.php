<?php

class Voiture extends Vehicule implements IRoulant {

    public function __construct(string $modele, string $immatriculation){
        parent::__construct($modele, $immatriculation);
    }
    public function rouler(){
        echo "<br>Je roule comme une voiture";
    }
}