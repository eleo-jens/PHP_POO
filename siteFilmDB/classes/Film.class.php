<?php

// en terme de framework: ceci s'apelle une entité 

class Film {

    private int $id;
    private string $titre;
    private int $duree;
    private string $description;
    private DateTime $dateSortie;
    private string $image;
    private Genre $genre;
    private float $prix;
    private array $notes;
    private array $favoris;
    
    public function hydrate(array $init){
        foreach ($init as $propriete => $valeur){
            $nomSet = "set" . ucfirst($propriete);
            if (!method_exists($this, $nomSet)){
                // à nous de voir selon le niveau de restriction/souplesse que l'on souhaite
                // si on passe des données qui ne font pas partie de la classe, ne fait rien
                // throw new Exception ("La méthode {$nomSet} n'existe pas");
            }
            $this->$nomSet($valeur); //lire le nom de la méthode stockée dans cette variable et va faire l'appelle de la méthode
        }
    }


    public function __construct(array $init){
        //on appelle la fonction hydrate en lui envoyant l'arret reçu lors de l'instanciation
        $this->hydrate($init);
        $this->notes = [];
        $this->favoris = [];
    }
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Get the value of duree
     */ 
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @return  self
     */ 
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
        
    }

    /**
     * Get the value of dateSortie
     */ 
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    /**
     * Set the value of dateSortie
     *
     * @return  self
     */ 
    public function setDateSortie(string $dateSortie)
    {

        $this->dateSortie = new DateTime($dateSortie);

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of notes
     */ 
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set the value of notes
     *
     * @return  self
     */ 
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get the value of favoris
     */ 
    public function getFavoris()
    {
        return $this->favoris;
    }

    /**
     * Set the value of favoris
     *
     * @return  self
     */ 
    public function setFavoris($favoris)
    {
        $this->favoris = $favoris;

        return $this;
    }

    public function addNote(Note $newNote):self {
        $this->notes[] = $newNote;
        $newNote->getFilm($this);
        return $this;
    }

    public function addFavori(Favori $newFavori): self {
        $this->favoris[] = $newFavori;
        $newFavori->setFilm($this);
        return $this;
    }
}
