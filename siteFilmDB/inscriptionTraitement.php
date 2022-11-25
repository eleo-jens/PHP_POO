<?php

include_once "./vendor/autoload.php";

$objetConnexion = new Connexion();
$cnx = Connexion::getPdo();

// Obtenur les données du formulaire

$login = $_POST['login'];
$login = filter_input (INPUT_POST, 'login', FILTER_VALIDATE_EMAIL);
// if(!$login){
//     //header()...
//     die();
// }

//Vérifier si les deux passewords indiqués sont les mêmes
if ($_POST['password'] == $_POST['repassword']){
    // Vérifier si l'user existe déjà ou non
    $UserManager = new UserManager($cnx);
    $user = $UserManager->findBy($login);
    
    // var_dump($user);
    
    if($user){
        echo "Erreur. L'utilisateur " . $login. " existe déjà.";
    }
    else {
        // Lancer l'insertion de l'utilisateur dans le tableau User
        $user = new User($_POST);
        $UserManager->insert($user);
    }
    
    // Si tout est OK, on va vers l'acceuil après avoir stocké le login dans la session
    session_start();
    $_SESSION['loginConnecte'] = $login;
    header ('location: ./index.php?p=accueil');
}
else {
    echo "attention: les deux mots de passe ne sont pas similaires";
}
