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

<form action="ex6_tabla3.php" method="POST">

    <table border="2" bgcolor="yellow">

        <?php


        if ($_SERVER["REQUEST_METHOD"] == "POST") {


            $numero = $_REQUEST['num'];
            print("<h1>Tabla de Multiplicar del " .$numero );
            //$flag = 0;

            for ($i = 1; $i < 11; $i++) {
                print("<tr>");


                print("<td>" . $numero . "</td>");
                print("<td>" . " * " . "</td>");
                print("<td>" . $i . "</td>");
                print("<td>" . " = " . "</td>");
                print("<td> <input type='text' id='result" . $i . "' name='result" . $i . "'> </td>");



                print("</tr>");
            }

            print("<td> <input type='hidden' id='numero' name='numero' value='". $numero."'> </td>");


        }


        ?>


    </table>

    <br><br>
    <input TYPE="submit" NAME=“valida" VALUE="Validar">
</form>


</html>
