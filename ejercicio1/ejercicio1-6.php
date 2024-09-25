<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1-6</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <table>
        <caption>Símbolos tibetanos entre el 3840 y el 4058</caption>
        <thead>
            <tr>
                <?php for($i=1; $i<11; $i++){ ?>
                    <th>Código</th>
                    <th>Símbolo</th>
                <?php } ?>
            </tr>
        </thead>
            <tr>
                <?php for($i=3840; $i<=4058;$i++){ ?>
                    <td><?= $i ?></td>
                    <td><?= "&#$i" ?></td>
                <?php if(($i+1)%10==0 && $i!=0){ ?>    <!-- Verificamos que no ha llegado a 10, para hacer retorno de carro -->
            </tr>
            <?php 
                }
                }
            ?>
        <tbody>
        </tbody>
    </table>  
</body>
</html>