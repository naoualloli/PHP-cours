<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>

</head>
<body>
    <h1>Les fonctions en php</h1>
    <?php
        function sayHello ($nom){
            return 'HELLO ' . $nom;
        }
        $salut = sayHello("NAOUAL");
        echo $salut;
        echo "<br>";
    ?>

    <hr>

    <?php
        function ClcMoyenne($N1,$N2){
            return ($N1+$N2)/2;
        }

         $result=ClcMoyenne(24,22);
         echo $result;

    ?>

    <hr>
    
</body>
</html>