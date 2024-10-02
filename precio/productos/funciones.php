<?php
echo $var_DUMP;
// Función para validar los campos del formulario y limpiarlos
$nombreProducto = htmlspecialchars($_POST['nombre_producto'], ENT_QUOTES, 'UTF-8' );
$precioBase = htmlspecialchars($_POST['precio_base'], ENT_QUOTES, 'UTF-8');
$cantidad = htmlspecialchars($POST['cantidad'], ENT_QUOTES, 'UTF-8');
$opcion = htmlspecialchars($_POST['opcion'], ENT_QUOTES, 'UTF-8' );
$iva = htmlspecialchars($_POST['iva'], ENT_QUOTES, 'UTF-8');
$cantidad = htmlspecialchars($POST['cantidad'], ENT_QUOTES, 'UTF-8');
$errores = [];

function validarCampos() {}
    //Validar nombre del producto
    if(empty($_POST[$nombre_producto])){
        $errores[] = "El nombre del producto es obligatorio.";
    }

    //Validar nombre del producto
    if(empty($_POST[$precio_base])){
        $errores[] = "El precio base del producto es obligatorio.";
    }

    //Validar nombre del producto
    if(empty($_POST[$cantidad])){
        $errores[] = "Se debe indicar una cantidad entre 1 y 100.";
    }

    //Validar nombre del producto
    if(empty($_POST[$opcion])){
        $errores[] = "Se debe indicar un descuento o recargo.";
    }

    //Validar nombre del producto
    if(empty($_POST[$iva])){
        $errores[] = "Se debe elegir un iva.";
    }

// Función para manejar la subida de imágenes
function manejarImagen() {}
    if (!isset($_FILES['nombre_fichero']) || $_FILES['nombre_fichero']['error'] != UPLOAD_ERR_OK)
        {
            $errores[] = "Debe seleccionar una iumagen."
        }
        


// Función para calcular el precio final
function calcularPrecioFinal() {}
