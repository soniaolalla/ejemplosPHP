<!--BUCLE FOR 
BUCLE:  Estructura de programación que se usa para repetir un determinado código un número determinado de veces.
FOR: BUCLE que conocemos de antemano el número de veces que quiero repetir la acción
FOR lleva implicito tres parámetros: la inicialización, la condicion y el incremento o decremento.
    for( inicializacion; condición; incremento/decremetto){
        bloque código
    }
-->
<?php
for($i = 1; $i <= 100; $i++){
    echo $i." ";
}

//Imprimir del 1 al 100 separado por comas y el 100 termina en punto.
for($i = 1; $i <= 100; $i++){
    $msg = ($i == 100) ? "$i. ":"$i, ";
    echo $msg;
}