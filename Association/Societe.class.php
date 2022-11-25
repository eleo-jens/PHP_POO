<?php 

include_once "./Personne.class.php";

class Societe {
    public function __construct(private string $nom, private string $secteur, private array $travailleurs = [], private array $fondateurs = []){

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
     * Get the value of secteur
     */ 
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set the value of secteur
     *
     * @return  self
     */ 
    public function setSecteur($secteur)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get the value of travailleurs
     */ 
    public function getTravailleurs()
    {
        return $this->travailleurs;
    }

    /**
     * Set the value of travailleurs
     *
     * @return  self
     */ 
    public function setTravailleurs($travailleurs)
    {
        $this->travailleurs = $travailleurs;

        return $this;
    }

    // Methodes de l'association
    public function addTravailleur(Personne $nouveauTravailleur): self {
        //lien 1
        $this->travailleurs[] = $nouveauTravailleur;
        //lien2
        $nouveauTravailleur->setEmployeur($this);

        return $this;
    }

    public function addFondateur(Personne $fondateur): self {
        //lien 1
        $this->fondateurs[] = $fondateur;
        
        return $this;
    }
}