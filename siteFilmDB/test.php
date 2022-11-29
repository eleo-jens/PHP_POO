<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "./vendor/autoload.php";

    $objetConnecte = new Connexion();
    $cnx = Connexion::getPdo();

    $f1 = new Film([
        'titre' => 'Lalalala',
        'duree' => 40,
        'description' => 'blabla',
        'image' => 'lala.jpg',
        'dateSortie' => '2000-10-10'
    ]);

    var_dump($f1);

    $u1 = new User([
        'login' => 'marie@gmail.com',
        'nom' => 'Marie',
        'password' => 'Marie'
    ]);

    $n1 = new Note(['cotation' => 4]);
    var_dump($n1);


    $filmManager = new FilmManager($cnx);
    $filmManager->insert($f1);

    var_dump($f1);

    $userManager = new UserManager($cnx);
    $userManager->insert($u1);

    $noteManager = new NoteManager($cnx);

    $u1->addNote($n1);
    $f1->addNote($n1);
    var_dump($n1);

    // die();


    $noteManager->insert($n1);
    var_dump($n1);







    ?>
</body>

</html>