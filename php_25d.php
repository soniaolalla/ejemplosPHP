<?php
//Variable centinela y variable contador
//Programa  que escribe número de uno a 500 y se repite hasta que aparece un múltiplo de 7. Pero como mucho se repite 8 veces.

$salir = false; //variable centinela
$i = 0; //contador

//primera forma
while ($salir == false && $i<8){
    $num = rand(1,500);
    echo ($num. "<br>");
    $i++;
    if (($num % 7) == 0){
        $salir = true;
    }
}

//segunda forma
while (!$salir && $i<8){
    $num = rand(1,500);
    echo ($num. "<br>");
    $i++;
    $salir = ($num % 7 == 0);
}