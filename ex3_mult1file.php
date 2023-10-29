<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 3</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 && $num2) {
        print("El resultado de la multiplicacion de " . ($num1 * $num2));
    }
}
else{

?>

<form method="POST">
    <label for="num1">Introduce el primer numero:</label>
    <input type="text" id="num1" name="num1"><br>
    <label for="num2">Introduce el segundo numero:</label>
    <input type="text" id="num2" name="num2">

    <br>
    <br>

    <input TYPE="submit" NAME="multiplica" VALUE="Multiplica dos numeros">

</form>

<?php

}
?>

</body>
</html>
