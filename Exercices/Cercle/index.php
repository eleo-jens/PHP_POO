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
    include_once "./Cercle.class.php";

    $c1 = new Cercle(2, 5, 3.5);
    echo "Aire: ". $c1->aire();
    echo "<br>";
    echo "Circonférence: ". $c1->circonference();
    echo "<br>";
    $c1->showCercle();

    $c2 = new Cercle (6, 10, 15);
    $c2->showCercle();

    ?>
</body>
</html>