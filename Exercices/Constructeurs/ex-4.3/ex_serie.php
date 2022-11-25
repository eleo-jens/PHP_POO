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
    include_once "./Serie.class.php";

    $s1 = new Serie("The Handmaid's Tale", [["prenom" => "Elisabeth", "nom" => "Moss"], ["prenom" => "Yvonne", "nom" => "Strahovski"], ["prenom" => "Alexis", "nom" => "Bledel"], ["prenom" => "Samira", "nom" => "Wiley"]], 5);
    var_dump($s1);
    ?>
</body>
</html>