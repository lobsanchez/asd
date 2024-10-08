<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas arrays nº3</title>
</head>
<body>
    <?php
        $tiposPrimarios="Primarios";
        $tiposSecundarios="Secundarios";

        $colores=[
            $tiposPrimarios => array(
                "Rojo" => "#FF0000",
                "Verde" => "#00FF00",
                "Azul" => "#0000FF"
            ),
            $tiposSecundarios => array(
                "Amarillo" => "#FFFF00",
                "Naranja" => "#FFA500",
                "Morado" => "#800080"
            )
        ];
        var_dump($colores);

        echo "Código hexadecimal de rojo ".$colores[$tiposPrimarios]["Rojo"];
    ?>
</body>
</html>