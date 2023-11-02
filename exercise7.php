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

if (isset($_REQUEST['adivina'])){

    $numgenerado = $_REQUEST['generado'];

    if(isset($_REQUEST['num'])){
        $numero = $_REQUEST['num'];

        if($numero > $numgenerado){

            print('<h1>Adivina el número del 1 al 100</h1>');

            print("El número es menor. Intentalo de nuevo");

            print('<form><br>
                        <label for="num">Introduce el número:</label>
                        <input type="text" id="num" name="num"><br>

                        <br>
                        <input type="submit" id="adivina" name="adivina" value="Enviar">
                        <input type="hidden" id="generado" name="generado" value="' . $numgenerado .'">
                   </form>     
            ');



        }
        else if ($numero < $numgenerado){

            print('<h1>Adivina el número del 1 al 100</h1>');

            //

            print("El número es mayor. Intentalo de nuevo");
            //print ("<br>");

            print('<form><br>
                        <label for="num">Introduce el número:</label>
                        <input type="text" id="num" name="num"><br>

                        <br>
                        <input type="submit" id="adivina" name="adivina" value="Enviar">
                        <input type="hidden" id="generado" name="generado" value="' . $numgenerado .'">
                   </form>     
            ');


        }else{
            print("Enhorabuena!!!! Has acertado el numero, que era el " . $numgenerado);
        }


    }
    else{
        print "No has introducido ningún número";

    }


}
else{
?>
<h1>Adivina el número del 1 al 100</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="num">Introduce el número:</label>
    <input type="text" id="num" name="num"><br>

    <br>
    <br>
    <input TYPE="submit" id='adivina' NAME="adivina" VALUE="Enviar">

    <?php

    }

    $generado = rand(1, 100);
    echo "<input type='hidden' id='generado' name='generado' value='$generado'></form>";
    ?>




</body>
</html>
