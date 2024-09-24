<?php
$a=15;
$contenido = <<<PRUEBA
<p>Este texto puede tener dentro "comillas" sin necesidad de 
escaparlas.</p>
<p>También procesa (reemplaza por su valor) las variables que 
hubiera dentro del código</p>
<p>Esta construcción del lenguaje llamada heredoc es ideal para 
incluir largos bloques de código HTML.</p>
<p>El valor de la variable a es: $a</p>
PRUEBA;
echo $contenido;
?>