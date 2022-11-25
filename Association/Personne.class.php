<?php

include_once "./Societe.class.php";

class Personne {
    private Societe $employeur; //relation de 1 à plusieurs
    private array $societesFondees; //relation de plusieurs à plusieurs

    public function __construct(private string $prenom, private string $nom)
    {
        
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    /**
     * Get the value of employeur
     */ 
    public function getEmployeur()
    {
        return $this->employeur;
    }

    /**
     * Set the value of employeur
     *
     * @return  self
     */ 
    public function setEmployeur($employeur)
    {
        $this->employeur = $employeur;

        return $this;
    }

    //méthodes de l'association
    public function addSocieteFondee(Societe $societe):self {
        $this->societesFondees[] = $societe;
        
        return $this;
    }
}