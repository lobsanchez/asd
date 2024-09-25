<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1-5</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <table>
        <caption>Emoticonos entre 128000 y 128702</caption>
        <thead>
            <tr>
                <?php for($i=1; $i<11; $i++){ ?>
                    <th>Código</th>
                    <th>Emoticono</th>
                <?php } ?>
            </tr> 
        </thead>
        <tbody>
            <tr>
                <?php 
                    for ($i=128000; $i<=128702; $i++){
                ?>
                <td><?= $i ?></td>
                <td><?= "&#$i" ?></td>
                <?php
                    if(($i+1)%10==0 && $i!=0 ){ 
                ?>
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