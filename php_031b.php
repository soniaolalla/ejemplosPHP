<!-- Igual que el anterior pero comprobando que existe la ciudad en dicha posición -->
<?php
$ciudades = ["Talavera de la Reina"];
if (isset($ciudades[1])){ //ver php_012.php. 
    echo"$ciudades[1]";
}else{
    echo "La ciudad no está en el índice especificado";
}