<!DOCTYPE html>
<html lang="es"> 

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="imagenServidor/default.png" type="image/x-icon">
    <title>Productos</title>
</head>

<body>

    <div class="container">
        <div class="form-container">
            <h2>Calculadora de Precio Final</h2>
            <!-- Rellena el form -->
            <form action="calculo.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Datos del Producto</legend>
                    <label for="nombre_producto">Nombre del Producto: </label>
                    <input type="text" name="nombre_producto"><br>
                    <label for="precio_base">Precio Base: </label>
                    <input type="text" name="precio_base"><br>
                    <label for="cantidad">Cantidad: </label>
                    <input type="text" name="cantidad"><br>
                </fieldset>
                <fieldset>
                    <legend>Operaciones</legend>

                    <fieldset id="operaciones">
                        <legend>Descuento o Recargo</legend>
                        <span id="grupo">
                            <!-- Faltan los valores de los radio buttons -->
                            <label for="descuento">Descuento (10%): </label>
                            <input class="radio-group" type="radio" name="opcion" value="10" checked >

                            <label for="recargo"> Recargo (15%): </label>
                            <input class="radio-group" type="radio" name="opcion" value="15"><br>
                        </span>
                    </fieldset>

                    <fieldset id="operaciones">
                        <legend>IVA</legend>
                        <span id="grupo">
                            <label for="iva">Aplicar IVA: </label>
                            <select id="iva" name="iva">
                                <option value="5">5%</option>
                                <option value="10">10%</option>
                                <option value="21">21%</option>
                                <!-- faltan las opciones -->
                            </select>
                        </span>
                    </fieldset>

                </fieldset>
                <fieldset>
                    <legend>Imagen del Producto</legend>
                    <label for="imagen_producto">Imagen del Producto: </label>
                    <!-- Faltan las opciones para subir la imagen -->
                    <input type="file" name="nombre_fichero" id="imagen_producto" accept="image*">
                </fieldset>
                <input type="submit" value="Calcular Precio Final">
            </form>
        </div>
    </div>
</body>
</html>
        