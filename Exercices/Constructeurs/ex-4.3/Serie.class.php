<?php 

class Serie {

    public function __construct(private string $titre, private array $acteurs, private int $nombreSaisons){

    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of acteurs
     */ 
    public function getActeurs()
    {
        return $this->acteurs;
    }

    /**
     * Set the value of acteurs
     *
     * @return  self
     */ 
    public function setActeurs($acteurs)
    {
        $this->acteurs = $acteurs;

        return $this;
    }

    /**
     * Get the value of nombreSaisons
     */ 
    public function getNombreSaisons()
    {
        return $this->nombreSaisons;
    }

    /**
     * Set the value of nombreSaisons
     *
     * @return  self
     */ 
    public function setNombreSaisons($nombreSaisons)
    {
        $this->nombreSaisons = $nombreSaisons;

        return $this;
    }
}