<?php
session_start();
?>

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

    if (isset($_REQUEST['enviar'])) {



        $birthday = new DateTime($_REQUEST['birth']);
        $now = new DateTime();
        $interval = $now -> diff($birthday);
        $years = $interval -> y;


        print ("Hello " . nl2br($_REQUEST['name']) . " How are you?" . "<br>");

        if($_REQUEST['sexo'] == 'Man'){
            print ("You are a Man" . "<br>" . "<br>");
        }else{
            print ("You are a Woman" . "<br>" . "<br>");
        }


        print ("Your age is " . $years  . "  years." . "<br>". "<br>");


        print ("Your favourite operating system is " . ($_REQUEST['osys'])   . "<br>". "<br>");

        if(isset($_REQUEST['football'])){
            print ("You like football" . "<br>" . "<br>");
        }else{
            print ("You dont like football" . "<br>" . "<br>");
        }

        print ("Your hobbies are:" . "<br>" . "<br>" . nl2br($_REQUEST['hobbies']) . "<br>". "<br>");

        $url = $_SERVER['PHP_SELF'];
        echo "<a href='$url'> Back to the Form </a>";
    }

else{
    ?>

    <form method="POST">

        <label for="name"><?= "Hola usuario " . $_SESSION["user"]; ?></label><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="birth">Birthday</label>
        <input type="date" id="birth" name="birth"><br><br>

        <label for="birth">Favourite Operating System: </label>
        <SELECT NAME="osys">
            <OPTION VALUE="linux" SELECTED>Linux
            <OPTION VALUE="windows">Windows
            <OPTION VALUE="mac">Mac
        </SELECT><br><br>

        <label for="sexo">Sexo: </label>
        <INPUT TYPE="radio" NAME="sexo" VALUE="Man" CHECKED>Hombre
        <INPUT TYPE="radio" NAME="sexo" VALUE="Woman">Mujer


        <br>
        <br>

        <label for="football">Do you like football?</label>
        <input type="checkbox" id="football" name="football"><br><br>


        <label for="name">Hobbies:</label><br><br>
        <TEXTAREA COLS="20" ROWS="4" NAME="hobbies"></TEXTAREA>
        <br>
        <br>

        <input TYPE="submit" NAME="enviar" VALUE="Submit">
        <input TYPE="reset" NAME="borrar" VALUE="Reset">

    </form>


    <?php
}
?>






</body>
</html>