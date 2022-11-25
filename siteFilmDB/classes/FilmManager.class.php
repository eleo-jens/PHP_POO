<?php

// ceci est la couche d'accès aux données
// class qui gèrent les fonctions pour les entités
// en terme de framework: repository

//doit gérer le CRUD pour le film
class FilmManager
{

    private PDO $cnx;

    public function __construct(PDO $cnx)
    {
        $this->cnx = $cnx;
    }

    public function insert(Film $film)
    {
        $sql = "INSERT INTO film (id, titre, duree, description, dateSortie, image) VALUES (NULL, :titre, :duree, :description, :dateSortie, :image)"; //placeholder pour éviter de devoir concaténer

        $stmt = $this->cnx->prepare($sql);

        $stmt->bindValue(":titre", $film->getTitre());
        $stmt->bindValue(":duree", $film->getDuree(), PDO::PARAM_INT);
        $stmt->bindValue(":description", $film->getDescription());
        $stmt->bindValue(":dateSortie", $film->getDateSortie()->format("y-m-d"));
        //obtenir un nom pour l'image
        $nomFichier = $this->uploadImage();
        $stmt->bindValue(":image", $nomFichier);

        $stmt->execute();

        // pour débug
        // var_dump($stmt->errorInfo());
    }

    //select par id, renvoi un objet ou un bool (false)
    public function find(int $id)
    {

        $sql = "SELECT * FROM film WHERE id LIKE :id";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();

        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($res) {
            // on a trouvé un film avec cet id
            $res = new Film($res);
        }
        return $res;
    }

    // Select par titre, renvoi un tableau d'objets
    public function findByTitre(string $titre, bool $titreExact = false): array
    {
        // PAR DEFAULT: 
        // si on veut chercher par un bout de titre
        if (!$titreExact) {
            $titre = "%" . $_POST['titre'] . "%";
        }
        $sql = "SELECT * FROM film WHERE titre LIKE :titre";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":titre", $titre);
        $stmt->execute();

        $arrayRes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $arrayObjet = null;
        foreach ($arrayRes as $film) {
            $array[] = new Film($film);
        }
        return $arrayRes;
    }

    // obtenir tous les films sous la forme d'un array d'objets
    public function findAll()
    {
        // obtenir tous les films de la BD sous la forme d'un array normal
        $sql = "SELECT film.id AS id, film.titre, film.image, film.prix, favori.idFilm as idFilmFavori 
        FROM film LEFT JOIN favori ON film.id = favori.idFilm
        AND favori.idUser = 
        (SELECT user.id FROM user where login = :login)";

        $stmt = $this->cnx->prepare($sql); //methode de la class PDO
        $stmt->bindValue(":login", $_SESSION['loginConnecte']);
        $stmt->execute();

        $arrayRes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        var_dump($arrayRes);

        // on créer un nouvel array d'objet
        $arrayObjet = null;
        foreach ($arrayRes as $film) {
            $array[] = new Film($film);
        }

        var_dump($arrayObjet);

        // on renvoit 
        return $arrayObjet;
    }

    public function delete(Film $film)
    {
        //effacer de la BD
        $sql = "DELETE FROM film WHERE :id = id";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":id", $film->getId(), PDO::PARAM_INT); //la requete ne sera pas lancée si ce n'est pas un int
        $stmt->execute();

        // (effacer le fichier d'image dans le disque)
        //obtenir le nom du fichier
        $fichierImg = $film->getImage();
        // fonction pour éffacer l'image du disque
        unlink('./img/' .$fichierImg);
    }

    public function update(Film $film){
        $sql = "UPDATE film SET titre = :titre, duree = :duree, description = :description, dateSortie= :dateSortie WHERE film.id = :id";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":id", $film->getId(), PDO::PARAM_INT);
        $stmt->bindValue(":titre", $film->getTitre());
        $stmt->bindValue(":duree", $film->getDuree(), PDO::PARAM_INT);
        $stmt->bindValue(":description", $film->getDescription());
        $stmt->bindValue("dateSortie", $film->getDateSortie());
        $stmt->execute();
    }

    // Upload du fichier dans le dossier ./img
    // Renvoi le nom du fichier pour le stocker dans le BD
    public function uploadImage(): string
    {
        // choisir un dossier pour le fichier
        $uploads = "./img";
        // pour générer un nom de fichier unique
        $idUnique = uniqid() . date("Y-m-d-H-i-s");
        // Créer le nom du fichier
        $nomFichier = $idUnique . basename($_FILES['image']['name']);

        // Déplacer le fichier du dossier tmp du serveur vers un dossier réel
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploads . "/" . $nomFichier)) {
            throw new Exception("Problème d'upload");
        }
        return $nomFichier;
    }
}
