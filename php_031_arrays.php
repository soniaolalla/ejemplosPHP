<!-- EMPEZAMOS ARRAYS -->
<!-- Diferentes forma de declarar un array en PHP.-->
<!-- <pre> formatea la salida para verlo igual que está en el código fuente-->
<!--print_r() muestra información de una variable
    var_dump() muetra además el tipo y el número de elemntos si es un array-->

<?php

echo "<h2>Declaración de arrays en PHP</h2>";

//1. Declaración de arrays usando array()
echo "<h3>1. Declaración de arrays usando array()</h3>";
$numeros = array(1,2,3,4,5);
echo"<pre>"; 
print_r($numeros);
var_dump($numeros);
"</pre>";

//2. Usando []
echo "<h3>1. Declaración de arrays usando la sintaxis corta[]</h3>";
$numeros = [1,2,3,4,5];
echo"<pre>"; 
print_r($numeros);
var_dump($numeros);
"</pre>";

