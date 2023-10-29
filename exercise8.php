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

if (isset($_REQUEST['send'])) {

    $link = $_REQUEST['link'];
    //obtienes la posicion de corte
    $cut = strpos($link, "=");
    print $cut;
    if ($cut !== false) {
        // Extract the video key
        $videoKey = substr($link, $cut + 1); // +1 to skip "="

        echo("<br><iframe width='1300px' height='600px' src='https://www.youtube.com/embed/" . $videoKey . "'></iframe>");

    }else {
        print("Video not found");
    }


}else{

?>


<form method="POST">
    <label for="link">URL:</label>
    <input type="text" id="link" name="link" size='18'><br>


    <br>
    <br>

    <input TYPE="submit" NAME="send" VALUE="Send">
</form>
<?php
}
?>


</body>
</html>