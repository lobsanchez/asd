<!-- formulario
texto
fecha
textyo
select multiple   -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento Deportivo</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="container_form">
    <h1>Formulario de Evento Deportivo</h1>
    <form action="procesar.php" method="post">
      
        <fieldset>

        <label for="nombre">Nombre del Evento:</label> <br/>
        <input type="text" name="nombre"><br/>
        <label for="fecha">Fecha:</label><br/>
        <input type="date" name="fecha"><br/>
        <label for="ubicacion">Ubicación:</label><br/>
        <input type="text" name="ubicacion"><br/>
        <label for="deportes">Deportes:</label><br/>
        <select name="deportes" multiple><br/>
            <option>Fútbol</option> 
            <option>Baloncesto</option>
            <option>Tenis</option>
            <option>Natación</option>

        </select><br/>
        <input class="boton" type="submit" value="Registrar"><br/>
        <textarea name="errores" rows="5" cols="">

        </textarea>

        </fieldset>
    </form>
    </div>
    
</body>
</html>