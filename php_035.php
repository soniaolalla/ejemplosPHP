<!-- Agregar elementos a un array en cualquier orden
 Al usar [] sin un índice específico, PHP asigna el siguiente índice mayor disponible automaticamente-->

<?php
$semana[1] = "lunes"; 
$semana[] = "martes";  //2
$semana[] = "miércoles"; //3
$semana[10] = "jueves";
$semana[] = "viernes"; //11
$semana[5] = "sábado";
$semana[] = "domingo"; //12

echo "<pre>";
print_r($semana);
echo "</pre>";