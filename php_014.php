<?php
//EXPRESIONES ARITMÉTICAS
//No es necesario inicilizar variables en PHP, sin embargo, es muy buena práctica. Las varibles no inicializadas tienen un valor predeterminad de acuerdo a su tipo dependiendo del contexto en el que son usadas.
//Las booleanas se asumen como false, los enteros y flotantes como cero, las cadenas (p.ej. usadas en echo) se establecen como una cadena vacía, y los arrays se establecen como un array vacío.

$a = 20;
$b = 3;
$resultado = 0; 

//Suma
$resultado = $a + $b;
echo "$a + $b es $resultado <br>";
echo '$a + $b es resultado';

//Resta
$resultado = $a - $b;
echo "$a - $b es $resultado <br>";

//Producto
$resultado = $a * $b;
echo "$a * $b es $resultado <br>";

//Division
$resultado = $a / $b;
echo "$a / $b es $resultado <br>";

//division entera
$resultado = (int)($a / $b);
echo "(int)($a / $b) es $resultado<br>";

//Operador módulo (%). Es el resto de la división
$resultado = $a % $b;
echo "El resto de dividir $a entre $b es $resultado"."<br>";

//Incrementos - Decrementos______________________________________________

//Post-incremento: 1º devuelve el valor y luego lo incrementa
$resultado = $a++; //$resultado = $a; $a = $a + 1;
echo "El valor de a con post-incremento es: $a. El valor de resultado es $resultado <br> ";

//Pre-incremento 
$resultado = ++$a; //1º $a = $a + 1;  2º $resultado = $a
echo "El valor de a con pre-incremento es: $a. El valor de resultado es $resultado <br>";

//Post-decremento
$a = 20;
$resultado = $a--; //resultado=20; $a=19
echo " El valor de a con post-decremento es: $a. El valor de resultado es: $resultado <br>";

//Pre-decremento
$a = 20;
$resultado = --$a; //resultado = 20; $a = 19
echo " El valor de a con pre-decremento es: $a. El valor de resultado es: $resultado <br>";

//asignación con operadores____________________________
$a = 20;
$a += 10; //$a = $a +10;
echo "El valor de 20 += 10 es: $a <br>";

$a = 20;
$a -= 10;
echo "El valor de 20 -= 10 es: $a <br>";

$a = 20;
$a *= 10;
echo "El valor de 20 *= 10 es: $a <br>";

$a = 20;
$a /= 10;
echo "El valor de 20 /= 10 es: $a <br>";

//Prioridad de operadores
$resultado = 2 + 3 * 5;
echo "El valor de 2 + 3 * 5 es $resultado<br>";

$resultado = (2 + 3) * 5;
echo "El valor de (2 + 3)* 5 es $resultado";

