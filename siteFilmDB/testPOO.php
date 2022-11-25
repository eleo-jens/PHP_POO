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
    include "./classes/Film.class.php";

    $f1 = new Film (["titre" => "Coco", 
                    "dateSortie" => new DateTime()]);
    var_dump($f1);

    // créer une classe de couche d'accès aux données
    $cnx = new Connexion();
    $filmManager = new FilmManager($cnx);
    $filmManager->insert ($f);
    ?>
</body>
</html>