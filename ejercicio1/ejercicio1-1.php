<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css"></link>
    <title>Ejercicio1-1</title>
</head>
<body>
    <?php 
        $a=mt_rand(1,3);
        switch ($a){
            case 1:
                ?>
                <figure>
                    <img src='tresImagenes/arbol.png' class='imagen_centrada'>
                    <figcaption>Primera imagen</figcaption>
                </figure>
                <?php      
                break;
            case 2:
                ?>
                <figure>
                    <img src='tresImagenes/mafalda.png' class='imagen_centrada'>
                    <figcaption>Segunda imagen</figcaption>
                </figure>
                <?php
                break;    
            case 3:
                ?>
                <figure>
                    <img src='tresImagenes/fox_terrier.png' class='imagen_centrada'>
                    <figcaption>Tercera imagen</figcaption>
                </figure>
                <?php
                break;
        }
    ?>
</body>
</html>