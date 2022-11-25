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
    include_once("./Person.class.php");
    $p1 = new Person();
    $p2 = new Person();
    $p1->setLastName("Galien");
    $p1->setFirstName("Tamir");
    $p2->setLastName("Rhius");
    $p2->setFirstName("Korin");
    $p1->setCivilStatus("single");
    $p2->setCivilStatus("married");
    var_dump($p1);
    var_dump($p2);
    echo $p1->getFirstName(). " " .$p1->getLastName(). " et " .$p2->getFirstName() ." ". $p2->getLastName();
    $p1->show();
    $p2->show();
    ?>
</body>
</html>