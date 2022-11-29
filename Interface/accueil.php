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
    include "./vendor/autoload.php";

    $voiture1 = new Voiture("Citroen456", "1-BE-564-88");
    $trot1 = new Trotinette("AXIS", "1-BE-654654");
    var_dump($voiture1);
    var_dump($trot1);
    $voiture1->rouler();
    $trot1->rouler();
    ?>
</body>
</html>