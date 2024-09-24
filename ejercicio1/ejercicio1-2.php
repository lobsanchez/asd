<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: rgb(255,255,255);
        }
    </style>
  
    <title>Ejercicio 1-2</title>

</head>

<?php
        $rojo=mt_rand(0,255);
        $verde=mt_rand(0,255);
        $azul=mt_rand(0,255);     
?>

<body style="background-color:rgb(<?php print$rojo.",".$verde.",".$azul;?>)">
   
</body>
</html>