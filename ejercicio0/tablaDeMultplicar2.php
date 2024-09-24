<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar V2</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>  
    <table>
        <caption>Tabla de multiplicar v2</caption>
        <thead>
            <tr>
                <th>Operando1</th>
                <th>Operador</th>
                <th>Operando2</th>
                <th></th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $numero=5;
            for($i=0;$i<=10;$i++){
                $resultado=$numero*$i;
                echo <<<MULTIPLICAR
                <tr>
                    <td>$numero</td>
                    <td>X</td>
                    <td>$i</td>
                    <td>=</td>
                    <td>$resultado</td>
                </tr>
                MULTIPLICAR;
            }       
            ?>    
        </tbody>       
    </table>    
</body>
</html>