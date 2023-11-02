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

if (isset($_REQUEST['insertar'])){

    $titulo = $_REQUEST['title'];

    $texto = nl2br($_REQUEST['texto']);

    $categoria = $_REQUEST['categ'];


    print('<h1 style="color: blue">Subida de Ficheros</h1>');
    print('<h2 style="font-style: italic">Resultado de la insercion de noticias</h2>');

    print("La noticia ha sido recibido correctamente: ");
    print('<br>');

    print('<ul>');

    print ("<li> Titulo: $titulo </li>");

    print ("<li> Texto: $texto </li>");

    print ("<li> Categoria: $categoria </li>");

    if(is_uploaded_file($_FILES['fichero']['tmp_name'])){

        $carpeta = 'img/';

        //para no machacar la imagen
        $idUnico = time();
        $nombreFichero = $idUnico . "-". $_FILES['fichero']['name'];


        move_uploaded_file($_FILES['fichero']['tmp_name'], $carpeta.$nombreFichero);

        $rutaImagen = $carpeta . $nombreFichero;
        print("La ruta de la imagen es " . $rutaImagen);
        print ("<li> Imagen: &nbsp &nbsp &nbsp &nbsp
                    <img width='128px' height='128px' src='$rutaImagen'/> 
                </li>");

    }
    else{
        print ("<li> Imagen: (no hay) </li>");
    }


    print('</ul>');


    $url = $_SERVER['PHP_SELF'];
    echo "<a href='$url'> Insertar otra noticia</a>";


}
else{
?>
<h1 style="color: blue">Subida de Ficheros</h1>
<h2>Insertar nueva noticia</h2>
<br><br>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <label for="title">Titulo:* </label>
    <input type="text" id="title" name="title"><br><br><br>

    <label for="texto">Texto: &nbsp &nbsp &nbsp &nbsp</label>
    <TEXTAREA COLS="20" ROWS="4" NAME="texto"></TEXTAREA>
    <br>
    <br>

    <label for="categoria">Categoría: </label>
    <SELECT NAME="categ">
        <OPTION VALUE="ofertas" SELECTED>ofertas
        <OPTION VALUE="deportes">deportes
        <OPTION VALUE="noticias">noticias
    </SELECT><br><br>

    <label for="imagen">Imagen: &nbsp &nbsp</label>
    <INPUT TYPE="HIDDEN" NAME="MAX_FILE_SIZE" VALUE='1048576'>
    <input type="file" name="fichero"><br><br>


    <input TYPE="submit" NAME="insertar" VALUE="Insertar Noticia">

    <?php

    }
    ?>

</form>
</body>
</html>
