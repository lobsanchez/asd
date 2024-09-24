<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <table>
        <caption>Tabla de multiplicar V3</caption>
        <thead>
            <tr>
                <th>Operando1</th>
                <th>Operador</th>
                <th>Operando2</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $numero=5;
            for ($i=1; $i<=10; $i++) {
            ?>
            <tr>
                <td><?= $numero ?></td>
                <td>X</td>
                <td><?= $i ?></td>
                <td><?= $numero*$i ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>