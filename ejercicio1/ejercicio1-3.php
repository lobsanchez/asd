<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1-3</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/estilos.css"> -->
</head>
<body>
    <table>
        <caption>Tabla ASCII</caption>
        <thead>
            <tr>
                <?php for($i=1; $i<9; $i++)  {?>
                    <th>Código</th>
                    <th>Valor</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php for($i=0; $i<128; $i++){ ?>
                    <td><?= $i ?></td>
                    <td><?= chr($i) ?></td>
                    <?php if(($i+1) % 8 == 0 && $i!=0) { ?>
                        </tr>
                        <tr>
                    <?php
                        }
                    ?>
                <?php
                    }
                ?>
            </tr>

        </tbody>
    </table>
</body>
</html>