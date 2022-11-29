<?php

class Trotinette extends Vehicule implements IRoulant {
    public function __construct(string $modele, string $immatriculation){
        parent::__construct($modele, $immatriculation);
    }

    public function rouler(){
        echo "<br>Je roule plus lentement";
    }
}