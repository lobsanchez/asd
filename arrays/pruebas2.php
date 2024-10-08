<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas de arrays nº2</title>
</head>
<body>
    <?php
        // Arrays bidimensionales escalares
        $array = array(
            array(1,2,3),
            array('valor 4', 'valor 5', 'valor 6'),
            array(7,8,9)
        );
        var_dump($array);
        echo $array[0][1];

        $array2=[[1,2,3],[4,5,6],[7,8,9]];
        var_dump($array2);
        echo $array2[0][0];

        // Arrays bidimensionales asociativos
        //Sintaxis larga
        $tablaAsociativa = array(
            "fila1" => array("columna1" => "A", "columna2" => "B"),
            "fila2" => array("columna1" => "C", "columna2" => "D"),
            "fila3" => array("columna1" => "E", "columna2" => "F")
        );
        var_dump($tablaAsociativa);
        //Sintaxis corta
        $tablaAsociativa2 = [
            "fila1" => ["columna1" => "A", "columna2" => "B"],
            "fila2" => ["columna1" => "C", "columna2" => "D" ]
        ];
        var_dump($tablaAsociativa2)

    ?>


    
</body>
</html>