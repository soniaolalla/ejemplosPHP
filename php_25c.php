<!-- ejercicio con BUCLE CENTINELA. Hay una variable que me dice si nos salimos del bucle al cumplirse una condición.
 
Programa que escribe número aleatorios entre uno y quienteos y se pare cuando el número sea múltiplo de 7-->

<?php
$salir = false;

//WHILE SE EJECUTA MIENTRAS SU EXPRSIÓN SEA VERDADERA. 
//POR ELLO WHILE(!SALIR) SE EJECUTA, PORQUE ES TRUE
// PERO WHILE($SALIR) NO SE EJECUTA PORQUE ES FALSE.
while (!$salir){ //PODRÍA HABER PUESTO (WHILE (SALIR == FALSE))
    $num = rand(1,500);
    echo "$num <br>";
    $salir = ($num % 7 == 0);//el centinela vale verdadero si es multipo de 7.
    //if ($num % 7 == 0){
    //    $salir = true;
    //}
    
}



