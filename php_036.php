<!-- Agregar elementos a un array en cualquier orden
 Al usar [] sin un índice específico, PHP asigna el siguiente índice mayor disponible automaticamente-->

<?php
$semana[] = "lunes"; 
$semana[] = "martes";  
$semana[] = "miércoles"; 
$semana[] = "jueves";
$semana[] = "viernes"; 
$semana[] = "sábado";
$semana[] = "domingo"; 

for ($i = 0; $i < count($semana); $i++){
    echo $semana[$i]. "<br>";
}

foreach ($semana as $dia){
    echo $dia."<br>";
}