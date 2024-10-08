<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1-7</title>
    <link >
</head>
<body>
    <?php
        function manipularNumeros($a, &$b, $c=5){
            $a=$a+$c;
            $b*=2;
            echo $a."<br>";
            echo $b;

        }
        $a=1;
        $b=2;
        $c=10;
        manipularNumeros($a,$b,$c);

    ?>
</body>
</html>