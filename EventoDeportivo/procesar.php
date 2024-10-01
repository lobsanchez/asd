<!-- en $POST tengo lo que me ha enviado el usuario
var_dump($_POST)  y veo que me ha llegado
comprobar que los campos del formulario (isset, empty...) no estén vacíos y recoger esos errores 
en un array
el formulario se recarga con un include -->


<?php
    echo var_dump($_POST);
    const MAX_TAMANIO=2097152;
    $errores = [];
    $erroresMostrar = '';
    $tiposMimePermitidos = ['image/gif', 'image/jpeg', 'image/png', 'image/bmp', 'image/webp'];

    //Validar nombre del evento
    if(empty($_POST['nombre'])){
        $errores[] = "El nombre del evento es obligatorio.";
    }

    //Validar fecha
    if(empty($_POST['fecha'])){
        $errores[] = "La fecha es obligatoria.";
    }

    //Validar ubicación
    if(empty($_POST['ubicacion'])){
        $errores[] = "La ubicación es obligatoria.";
    }

    //Validar deportes
    if(empty($_POST['deportes'])){
        $errores[] = "Debe seleccionar, al mnenos, un deporte.";
    }

    //Validar fichero
    //Preguntar a partir de este apartado, no lo entiendo
    if (!isset($_FILES['nombreCampo']) || $_FILES['nombreCampo']['error'] != UPLOAD_ERR_OK) {
        $errores[] = "Debe seleccionar un archivo.";
    } else {
        $archivoTemporal = $_FILES['nombreCampo']['tmp_name'];
        $tipoMime = mime_content_type($archivoTemporal);
        $tamaño = filesize($archivoTemporal);
        if (!in_array($tipoMime, $tiposMimePermitidos)) {
            $errores[] = "El archivo debe ser una imagen GIF, JPEG, PNG, BMP o WEBP.";
        }
        if ($tamaño > MAX_TAMANIO) {
            $errores[] = "El archivo no debe superar los 2MB.";
        }
    }
        

?>