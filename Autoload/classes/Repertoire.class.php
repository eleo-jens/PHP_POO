<?php

class Repertoire {
    private string $nom; 
    private string $description;     
    private array $contacts;

    public function __construct(string $nom, string $description, array $contacts = []){
        $this->nom = $nom;
        $this->description = $description;
        $this->contacts = $contacts;
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

    public function afficher(){

    }

    /**
     * Get the value of contacts
     */ 
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Set the value of contacts
     *
     * @return  self
     */ 
    public function setContacts($contacts)
    {
        $arrayOk = true;
        if(is_array($contacts))
        {
            if (count($contacts)>0){
                $i = 0;
                while($i < count($contacts) AND $arrayOk == true){
                    if (get_class($contacts[$i]) != "Contact"){
                        $arrayOk = false;
                    }
                    $i++;
                }
            }
        }
        $this->contacts = $contacts;
        
        // si l'array est false
        if (!$arrayOk){
            throw new Exception("Les contacts doivent être sous la forme d'un array d'objets Contact ");
        }
        else {
            $this->contacts = $contacts;
        }
        return $this;
    }

    // rajouter un contact
    public function addContact (Contact $nouveauContact): self {
        // rajoute le contact au repertoire
        $this->contacts[] = $nouveauContact;

        //fixer le repertoire pour le contact
        $nouveauContact->setRepertoire($this);
        
        return $this;
    }
}