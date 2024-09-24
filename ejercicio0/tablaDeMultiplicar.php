<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar V1</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <table>
        <caption>Tabla de multiplicar V1</caption>
        <thead>
            <tr>
                <th>Operando1</th>
                
                <th>Operador</th>
                
                <th>Operando3</th>
                
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                $numero=5;
                for($i=1;$i<=10;$i++){
                    echo "<tr>";
                    echo "<td>".$numero."</td>";
                    echo "<td>X</td>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$numero*$i."</td>";
                    echo "</tr>";
                }
            ?>
            
        </tbody>
    </table>
</body>
</html>