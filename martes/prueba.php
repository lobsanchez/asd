<?php
$a=15;
$contenido=<<<PRUEBA
    <p>Esto es una prueba de texto</p>
    <p>Con varios párrafos</p>
    <a href="#">Donde puedes poner todo tipo de etiquetas</a>
    <h2>Y además mostrar el valor de variables como a que vale: $a</h2>
PRUEBA;
echo $contenido;
?>