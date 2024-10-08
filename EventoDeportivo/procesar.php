<!-- en $POST tengo lo que me ha enviado el usuario
var_dump($_POST)  y veo que me ha llegado
comprobar que los campos del formulario (isset, empty...) no estén vacíos y recoger esos errores 
en un array
el formulario se recarga con un include -->

<?php
    // echo var_dump($_POST); 
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
    if (!isset($_POST['deportes']) || empty($_POST['deportes'])) {
        $errores[] = "Debe seleccionar al menos un deporte.";
    }
    

    //Validar fichero
    //Preguntar a partir de este apartado, no lo entiendo
    if (!isset($_FILES['nombreCampo']) || 
        $_FILES['nombreCampo']['error'] != UPLOAD_ERR_OK) {  //UPLOAD_ERR_OK es igual a cero, es una constante de php
        $errores[] = "Debe seleccionar un archivo válido.";

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
        
    // Si hay errores volcar el array en una cadena con un salto de línea
    if (!empty($errores)) {
        foreach ($errores as $error) {
            $erroresMostrar .= $error . '<br>';
        }
    }
    // Si hay errores volcar el array en una cadena con un salto de línea
    if (!empty($errores)) {
        $erroresMostrar = implode('<br>', $errores);
    }

    include('index1.php');

    if (empty($errores)) {
        // Evitar ataques XSS
        
        //<a href='https://www.elmundo.es/'>Haz clic aquí</a>
        //<script>alert("Esto es un ataque XSS")</script>    
        //<script>window.location.href= 'https: //www.elmundo.es/';</script>

        // Sanitizar los datos
        $nombre_evento = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
        $ubicacion = htmlspecialchars($_POST['ubicacion'], ENT_QUOTES, 'UTF-8');

        $fecha = htmlspecialchars($_POST['fecha'], ENT_QUOTES, 'UTF-8');
        $deportes = $_POST['deportes'];
        $nombre_evento = $_POST['nombre'];
        $ubicacion = $_POST['ubicacion'];

        // Procesar el archivo
        $nombreArchivo = $_FILES['nombreCampo']['name'];
        $rutaArchivo = 'imagenes/' . $nombreArchivo;

        move_uploaded_file($_FILES['nombreCampo']['tmp_name'], $rutaArchivo);
        include('ficha.php');
    }

?>