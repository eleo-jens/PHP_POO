<?php

class UserManager {
    private PDO $cnx;

    public function __construct(PDO $cnx){
        $this->cnx = $cnx;
    }

    public function insert(user $user){
        $sql = "INSERT INTO user (id, nom, login, password) VALUES (null, :nom, :login, :password)";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue (":nom", $user->getNom());
        $stmt->bindValue (":login", $user->getLogin());
        $password = password_hash($user->getPassword(), PASSWORD_DEFAULT, ['cost'=>12]);
        $stmt->bindValue (":password", $password); 
        $stmt->execute();
        $id = $this->cnx->lastInsertId();
        $user->setId($id);
    }

    public function findBy(string $login){
        $sql = "SELECT * FROM user WHERE login = :login";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":login", $login);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($res){
            $res = new User($res);
        }
        return $res;
    }

    //fonction pour vérifier l'utilisateur mais qui a peu de sens dans la classe...
    // public function checkUser(string $login, string $password){
    //     $user = $this->findBy($login);

    //     if (password_verify($password, $user->getPassword())){
    //         return true;
    //     }
    //     return false;
    // }

}