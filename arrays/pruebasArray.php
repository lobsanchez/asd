<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas arrays</title>
</head>
<body>
    <?php
        $matriz=[
            0 => 1,
            1 => 2,
            2 => '3'
        ];
        $matriz[]=7;
        $matriz[8]=8;
        $matriz['clave']='cadena';
        var_dump($matriz);
        echo $matriz[0];

        $matriz2=['valor1','valor 2','valor 3', false];
        var_dump($matriz2);
        echo $matriz2[0];
       
        $matriz3=array('valor 1', 1 => 'valor 2', 'valor 3');
        $matriz3[]=12;
        $matriz3[]='valor 4';
        var_dump($matriz3);
        echo $matriz3[0];

    ?>
    
</body>
</html>