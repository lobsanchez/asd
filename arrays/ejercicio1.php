<?php
    $productos=[
        ['nombre' => 'Portátil', 'precio' => 800, 'stock' => 10],
        ['nombre' => 'Móvil', 'precio' => 500, 'stock' => 20],
        ['nombre' => 'Tablet', 'precio' => 300, 'stock' => 15]
    ];       
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
  
    <table>
        <thead>
            <caption>Productos</caption>
            <tr>    
                <td>Nombre</td>
                <td>Precio</td>
                <td>Stock</td>
            </tr>    
        </thead>
        <tbody>


            <?php foreach ($productos as $producto); ?>
                <tr>
                    <td><?= $producto['nombre'] ?></td>
                    <td><?= $producto['precio'] ?></td>
                    <td><?= $producto['stock'] ?></td>
                </tr>
            <?php endforeach; ?>

            </tr>
        </tbody>
        

    </table>
</body>
</html>