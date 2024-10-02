<?php
// Funciones  (a este hay que añadirle poco código)
require_once 'funciones.php'; 
//crear un array de errores
$errores=[];
$erroresMostrar='';

echo "<pre>";
var_dump($_POST);
echo "</pre>";


// Procesar formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    validarCampos(&$nombre_producto, &$precio_base, &$cantidad, &$opcion, &$iva, &$errores);
    calcularPrecioFinal();
    manejarImagen();

    // Mostrar formulario: deben conservarse los valores válidos en los campos
    // y mostrar resultado con los errores y los campos válidos
    require_once 'index.php';
    require_once 'resultado.php';
}
