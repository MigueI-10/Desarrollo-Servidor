<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $array = [];


    $numero = $_REQUEST['numero'];
    $contFallos = 0;


    for ($i = 1; $i < 11; $i++) {

        array_push($array, $_REQUEST['result' . $i]);


    }


//El resultado de multiplicar 7 por 4 es 28 y no 29
    for ($i = 1; $i < 11; $i++) {

        if ($numero * $i != $array[$i-1]) {

            print("El resultado de multiplicar " . $numero . " por " . ($i) . " es " .
                ($numero * $i) . " y no " .  $array[$i-1] . "<br>");
            $contFallos++;
        }
    }

    print("<br>");

    if($contFallos > 0){
        print("Tienes " . $contFallos . " fallos.");
    }
    else{
        print("No tienes fallos!!!!");
    }


}


?>

</body>
</html>
