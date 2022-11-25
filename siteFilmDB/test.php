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

        $f1 = new Film (['titre' => "lalala"]);
        $u1 = new User (['login'=>"Marie", 
                        'password' => "Marie"]);
        
        $n1 = new Note(['cotation' => 4]);
        var_dump($n1);

        $u1->addNote($n1);
        $f1->addNote($n1);
        var_dump($n1);




        
        

    ?>
</body>
</html>