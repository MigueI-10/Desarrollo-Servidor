<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 6.2</title>
</head>
<body>


<?php

if (isset($_REQUEST['muestra'])) {

    print("<form>");
    $numero = $_REQUEST['num'];
    print("<h1>Tabla de Multiplicar del " . $numero);
    //$flag = 0;
    print ("<br>");

    print("<table border='2' bgcolor='yellow'>");

    for ($i = 1; $i < 11; $i++) {

        print("<tr>");


        print("<td>" . $numero . "</td>");
        print("<td>" . " * " . "</td>");
        print("<td>" . $i . "</td>");
        print("<td>" . " = " . "</td>");
        print("<td> <input type='text' id='result" . $i . "' name='result" . $i . "'> </td>");


        print("</tr>");
    }

    print("<td> <input type='hidden' id='numero' name='numero' value='" . $numero . "'> </td>");

    print("<table/>");

    print("<input TYPE='submit' NAME='valida' VALUE='Validar'>");

    print("<td> <input type='hidden' id='numero' name='numero' value='" . $numero . "'> </td>");

    print("<form/>");


} else if (isset($_REQUEST['valida'])) {
    $array = [];


    $numero = $_REQUEST['numero'];
    $contFallos = 0;


    for ($i = 1; $i < 11; $i++) {

        array_push($array, $_REQUEST['result' . $i]);

    }

    for ($i = 1; $i < 11; $i++) {

        if ($numero * $i != $array[$i - 1]) {

            print("El resultado de multiplicar " . $numero . " por " . ($i) . " es " .
                ($numero * $i) . " y no " . $array[$i - 1] . "<br>");
            $contFallos++;
        }
    }

    print("<br>");

    if ($contFallos > 0) {
        print("Tienes " . $contFallos . " fallos.");
    } else {
        print("No tienes fallos!!!!");
    }


} else {
    ?>

    <h1>Tabla de Multiplicar</h1>

    <form method="POST">
        <label for="num">Introduce un numero:</label>
        <input type="text" id="num" name="num"><br>

        <br>
        <br>

        <input TYPE="submit" NAME="muestra" VALUE="Mostrar">

    </form>


    <?php
}

?>


</body>
</html>
