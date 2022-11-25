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
    include_once "./Contact.class.php";

    $c1 = new Contact("Patrick", "Dupont", "0456987321");
    $c2 = new Contact("Eli", "Doe", "024568791");
    echo $c1->getPrenom();
    echo "<br>";
    echo $c1->getNom();
    echo "<br>";
    echo $c1->getTelephone();
    echo "<br>";
    echo $c2->getPrenom();
    echo "<br>";
    echo $c2->getNom();
    echo "<br>";
    echo $c2->getTelephone();
    echo "<br>";
    ?>
</body>
</html>