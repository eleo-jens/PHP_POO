<?php 

class Favori {

    private int $id; 
    private Film $film;
    private User $user; 

    public function hydrate(array $init){
        foreach ($init as $propriete => $value){
            $setNom = "set" . ucfirst($propriete);
            if (method_exists($this, $setNom)){
                $this->$setNom($value);
            }
        }
    }

    public function __construct(array $init){
        $this->hydrate($init);
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
     * Get the value of film
     */ 
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * Set the value of film
     *
     * @return  self
     */ 
    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
}