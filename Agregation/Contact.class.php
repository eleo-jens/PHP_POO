<?php

include_once "./Repertoire.class.php";

class Contact {
    private string $prenom;
    private string $nom;
    private string $telephone;
    private Repertoire $repertoire;

    public function __construct(string $prenom, string $nom, string $telephone){
        $this->prenom = $prenom;
        $this->nom = $nom; 
        $this->telephone = $telephone;
    }

    public function setPrenom(string $prenom): void {
        $this->prenom = $prenom;
    }
    public function getPrenom(): string {
        return $this->prenom;
    }
    public function setNom(string $nom): void {
        $this->nom = $nom;
    }
    public function getNom(): string {
        return $this->nom;
    }
    public function setTelephone(string $telephone): void {
        $this->telephone = $telephone;
    }
    public function getTelephone(): string {
        return $this->telephone;
    }

    /**
     * Get the value of repertoire
     */ 
    public function getRepertoire()
    {
        return $this->repertoire;
    }

    /**
     * Set the value of repertoire
     *
     * @return  self
     */ 
    public function setRepertoire($repertoire)
    {
        $this->repertoire = $repertoire;

        return $this;
    }
}