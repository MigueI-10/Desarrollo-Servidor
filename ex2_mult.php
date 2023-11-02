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
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];

    $answer = $_REQUEST['operation'];

    if ($answer == "plus") {
        print ("El resultado de la suma es " . ($num1 + $num2));
    }
    else if($answer == "minus"){
        print ("El resultado de la resta es " . ($num1 - $num2));
    }
    else if($answer == "division"){
        print ("El resultado de la division es " . ($num1 / $num2));
    }
    else if($answer == "mult"){
        print ("El resultado de la multiplicacion es " . ($num1 * $num2));
    }
}
?>
</body>
</html>

