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
        include_once "./Image.class.php";

        $img1 = new Image("./images/colorisme.png", "Couverture analyse FPS 2021: Colorisme, un complexe de couleurs");
        $img1->afficher();
        $img1->setSrc("./images/etude2019.png");
        $img1->afficher();
        $img2 = new Image("./images/etude2019.png", "Couverture Etude FPS 2019: Du chômage au CPAS: récits de femmes");
        $img2->afficher();
        $img3 = new Image("./images/justicefiscale.png", "Couverture Analyse FPS 2021: Une lecture féministe de la justice fiscale");
        $img3->afficher();

        ?>
</body>
</html>