<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1-4</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <table>
        <caption>Tabla UNICODE</caption>
        <thead>
            <tr>
                <?php
                    for($i=1; $i<11; $i++){
                ?>
                <th>Código</th>
                <th>Valor</th>
                <?php } ?>
        </thead>    
        <tbody>
        </tr>
            <tr>
                <?php 
                    for($i=0; $i<1000; $i++){
                ?>
                    <td><?= $i ?></td>
                    <td><?= "&#$i;" ?></td>
                    <?php if(($i+1)%10==0 && $i!=0){ ?>
                        </tr>
                        <tr>
                    <?php } 
                    }
                    ?>
            </tr>
        </tbody>
    </table>
</body>
</html>