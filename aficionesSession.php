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

    $user = $_REQUEST["user"];
    $pass = $_REQUEST["pass"];

//!isset($_SESSION["user"]) header("index.php")

    if (isset($_SESSION["user"])) {

        if ($_SESSION["user"] == $user && $_SESSION["pass"] == $pass){
            echo "<a href='ex4_aficiones.php'> Insert a piece of news </a><br>";

            echo "<a> Delete a piece of news </a><br>";

            echo "<a> Edit a piece of news </a><br>";

            echo "<a href='logout.php'> Insert a piece of news </a><br>";
        }
        else if($_SESSION["user"] == $user && $_SESSION["pass"] != $pass){
            print "Wrong password!!!!";
            $url = $_SERVER['PHP_SELF'];
            echo "<a href='$url'> Back to the Form </a>";
        }else{
            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;

            print "The user  ". $user . " has been created correctly";

            $url = $_SERVER['PHP_SELF'];
            echo "<a href='$url'> Back to the Form </a>";
        }

    }

}

else{
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">User:</label>
        <input type="text" id="user" name="user"><br><br>
        <label for="birth">Password: </label>
        <input type="password" id="pass" name="pass"><br><br>

        <input TYPE="submit" NAME="enviar" VALUE="Submit">
        <input TYPE="reset" NAME="borrar" VALUE="Reset">

    </form>


    <?php
}
?>

</body>
</html>

