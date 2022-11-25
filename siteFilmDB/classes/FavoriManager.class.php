<?php

class FavoriManager {

    private PDO $cnx; 

    public function __construct(PDO $cnx){
        $this->cnx = $cnx;
    }

    public function insert(Note $note){
        $idUser = $note->getUser()->getId();
        $idFilm = $note->getFilm()->getId();


    }

    public function findBy(Film $film, User $user){
        
    }


}