<!-- ARRAYS ASOCIATIVOS: El índice (key) de cada elemento es una clave personalizada que no tiene por qué ser numérica -->$_COOKIE

<?php
//ARRAY INDEXADO. SUS CLAVES SON 1 2 3 4 5 6 
$semana = ["lunes", "martes", "miécoles", "jueves", "viernes"];
//muestro la clave y el valor de un array indexado.
foreach($semana as $clave => $valor){
    echo "$clave => $valor<br>";
}

//  ARRAY ASOCIATIVO de edades. Sus claves serán juan, Ana , Luis y Marta. 
$edades = ["Juan" => 25,"Ana" => 30, "Luis" => 22, "Marta" =>28];
echo "Edades de las personas: <br>";
foreach ( $edades as $nombre => $edad){
    echo "$nombre tiene $edad años.<br>";
}
