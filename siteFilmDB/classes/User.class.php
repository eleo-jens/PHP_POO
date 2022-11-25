<?php 

class User {

    private int $id;
    private string $nom;
    private string $login;
    private string $password;
    private string $role;
    private array $notes;
    private array $favoris;

    public function hydrate(array $init){
        foreach($init as $propriete =>$value){
            $nomSet = "set" . ucfirst($propriete);
            if (method_exists($this, $nomSet)){
                $this->$nomSet($value);
            }
        }
    }

    public function __construct(array $init)
    {
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
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

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
        $newNote->setUser($this);
        return $this;
    }

    public function addFavori(Favori $newFavori): self {
        $this->favoris[] = $newFavori;
        $newFavori->setUser($this);
        return $this;
    }
}