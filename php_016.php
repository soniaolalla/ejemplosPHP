<?php
//CADENAS. Su posicion inicial es 0
//FUNCIONES:
//strlen(): Devuelve la posición de una cadena
//strtolower(): convierte toda la cadena a minúsculas
//strtoupper(): Convierte toda la cadena a mayúsculas.
//strcmp(): Compara dos cadenas (sensible a mayúsculas y minúscula.) Devueve 0 si son iguales
//strcasecmp(): Compara dos cadenas (insensible a mayúscula y minúsculas). Devuelve 0 si son iguales
//substr(): Extraer una parte de la cadena
//str_repeat(): repite una cadena el número de veces que se expecifican
//trim(): eliminar los espacios en blanco al principio y al final de una cadena.
//str_word_count()
//strrev():Invierte una cadena 
//strpos(): Busca un texto dentro de una cadena y devuelve su posición
//str_replace(): reemplaza unos caracteres por otros.

//Asignar "Hola mundo!" a una variable
$texto = "Hola Mundo!";

//Contar el número de palabras
echo "Número de palabras de $texto: ".str_word_count($texto). "<br>";

//Invertir la cadena
echo "Cadena invertida: ". strrev($texto). "<br>";

//buscar el texto "Mundo" dentro de la cadena
echo "Posición de 'Mundo':". strpos($texto,"Mundo")."<br>";

//Reemplazar 'Mundo' por 'Dolly'
echo "reemplazo de 'Mundo' por 'Dolly': ".str_replace("Mundo","Dolly",$texto)."<br>";

//Longitud de una cadena
echo " Longitud de la cadena '$texto' :". strlen($texto)."<br>";

//Pasar a minúsculas
echo "Cadena en minúsculas: ". strtolower($texto)."<br>";

//Pasar a mayúsculas
echo "Cadena en mayúsculas: ". strtoupper($texto)."<br><br>";

//Comparar cadenas sensibles mayúsculas y minúsculas
echo "comparación de 'Hola' y 'hola': ".strcmp("Hola","hola")."<br>";

//Comparar cadenas insensibles mayúsculas y minúsculas
echo "comparación de 'Hola' y 'hola': ".strcasecmp("Hola","hola");
echo "<br>";

//Extraer cinco caracteres a partir del carácter 5
echo "subcadena de tres caracteres de '$texto':  a partir del quinto". substr($texto,5,3)."<br>";
echo "subcadena de  '$texto' a partir del quinto carácter: ". substr($texto,5,3)."<br>";

//repetir una cadena
echo "repetir 'Hola' tres veces: " . str_repeat("Hola ",3)."<br>";

//eliminar espacios en blanco ????
$texto2= "     Hola Mundo      ";
echo "Cadena con espacios eliminados: $texto2"."<br>";
echo "Cadena con espacios eliminados: " . trim($texto2)."<br>";




