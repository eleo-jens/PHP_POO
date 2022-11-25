<?php
// prémiere ligne du script, pour accéder à la session
session_start();

include_once "./vendor/autoload.php";

$objetConnexion = new Connexion();
$cnx = Connexion::getPdo();

// 1. Récuperer le login $_POST['login'] et le mot de pass
$login = $_POST['login'];
$password = $_POST['password'];

// 2. Chercher le login dans la BD et obtenir son password
$UserManager = new UserManager($cnx);
$user = $UserManager->findBy($login);

$passwordBD = $user->getPassword();
$role = $user->getRole();

// 3. Comparer le password reçu du formulaire avec le password de l'user obtenu de la BD
if (password_verify($password, $passwordBD)) {
    // 4. Si ok, aller vers l'accueil
    // après avoir mis le login dans la session
    $_SESSION ['loginConnecte'] = $login;
    $_SESSION ['role'] = $role;
    header('location: ./index.php');

} else {
    // 5. Si pas ok, aller vers la page de login en envoyant un message dans la URL
    header('location: ./login.php?error=badPass');
}
?>
