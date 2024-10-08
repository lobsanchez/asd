<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1-8</title>
</head>
<body>
    <?php
        $factor=3;
        function multiplicar($numero, &$resultado){
            global $factor;
            static $contador=0;
            $contador++;
            $resultado=$numero*$factor;
            return $contador;

        }
        $resultado=0;
        $numero=5;
        
        $contador=multiplicar($numero, $resultado);
        echo $numero." multiplicado por ".$factor." es ".$resultado." veces: ".$contador."<br>";
       
        $numero=7;
        $contador=multiplicar($numero, $resultado);
        echo $numero." multiplicado por ".$factor." es ".$resultado." veces: ".$contador;
       
    ?>
    
</body>
</html>