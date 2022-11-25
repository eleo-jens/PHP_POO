<?php 

class NoteManager {
    private PDO $pdo;

    public function __construct(PDO $cnx){
        $this->cnx = $cnx;
    }

    public function insert(Note $note){
        $sql = "INSERT INTO note (id, idUser, idFilm, cotation) VALUES (NULL, :idUser, :idFilm, :cotation)";

        $stmt = $this->cnx->prepare($sql);

        $stmt->bindValue(":cotation", $note->getCotation());
        $stmt->bindValue(":idUser", $note->getUser()->getId());
        $stmt->bindValue(":idUser", $note->getFilm()->getId());

        $stmt->execute();
    }

    
}