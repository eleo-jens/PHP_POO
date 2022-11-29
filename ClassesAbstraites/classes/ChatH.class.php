<?php

class ChatH extends AnimalH{
    private int $nbrMoustaches;

    public function __construct(string $nom, int $poids, int $nbrMoustaches)
    {
        parent::__construct($nom, $poids);
        $this->nbrMoustaches = $nbrMoustaches;
    }

    // méthode propre
    public function miauler(): void  {
        echo "<br>miiiiauu";
    }
    // méthode héritée de la classe abstraite et implémenter ici
    public function manger(): void  {
        echo "<br>je mange des poissons";
    }

    /**
     * Get the value of nbrMoustaches
     */ 
    public function getNbrMoustaches()
    {
        return $this->nbrMoustaches;
    }

    /**
     * Set the value of nbrMoustaches
     *
     * @return  self
     */ 
    public function setNbrMoustaches($nbrMoustaches)
    {
        $this->nbrMoustaches = $nbrMoustaches;

        return $this;
    }
}