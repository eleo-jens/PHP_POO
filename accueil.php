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
    include_once "./Repertoire.class.php";
    $r = new Repertoire("maison", "les numéros de la famille");
    var_dump($r);
    $c1 = new Contact("Leal", "Chocofrito", "0423654987");
    $c2 = new Contact("Nicole", "Lenoir", "024563215");

    $r->addContact($c1)->addContact($c2)->addContact(new Contact("Sam", "Legrain", "0456987456"));
    var_dump($r);
    // $r->setContacts([$c1, $c2]);
    // var_dump($r);
    // $r->setContacts("lala");
    // var_dump($r);
    ?>
</body>
</html>