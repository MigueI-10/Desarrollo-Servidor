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

<table border="2" bgcolor="yellow">

    <?php


    if($_SERVER["REQUEST_METHOD"] == "POST") {


        $num = $_REQUEST['num'];

        print($num);

        for ($i = 1; $i < 11; $i++) {
            print("<tr>");


            print("<td>" . $num . "</td>");
            print("<td>*</td>");
            print("<td>" . $i . "</td>");
            print("<td>=</td>");
            print("<td>" . ($num * $i) . "</td>");


            //print("<td>" . $i . " * " . $num . " = " . ($i * $num) . "</td>");

            print("</tr>");
        }

    }


    ?>

</table>

</body>
</html>

