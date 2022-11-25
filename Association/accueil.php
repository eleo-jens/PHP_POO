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
    include_once "./Societe.class.php";
        $s1 = new Societe("Interface3", "Formation");
        var_dump($s1);
        $t1 = new Personne("Leal", "Choco");
        $t2 = new Personne("Nicole", "Lenoir");
        $t3 = new Personne("Laure", "Lemaire");

        $s1->addTravailleur($t1)->addTravailleur($t2)->addTravailleur($t3);
        var_dump($s1);

        $s1->addFondateur($t3);
        $t3->addSocieteFondee($s1);
        var_dump($s1);
    ?>
</body>
</html>