<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <table>
        <tr>
            <th>Operando1</th>
            <th>Operador</th>
            <th>Operando2</th>
            <th>Resultado</th>
        </tr>

        <?php
            $operando1=5;
            for($i=1;$i<=10;$i++){
                echo "<tr>";
                echo "<td>".$operando1."</td>";
                echo "<td>X</td>";
                echo "<td>$i</td>";
                echo "<td>".$operando1*$i."</td>";
                echo "</tr>";
            }



        ?>
    </table>
</body>
</html>