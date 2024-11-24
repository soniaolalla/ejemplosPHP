<?php
// Array multidimensional con países y ciudades
$ciudades = array(
    "España" => array("Madrid", "Barcelona", "Sevilla"),
    "Italia" => array("Roma", "Milán", "Venecia"),
    "Holanda" => array("Amsterdam", "Rotterdam")
);

// Recorrer el array con foreach
foreach ($ciudades as $pais => $listaCiudades) {
    echo "<br>País: $pais<br>";
    foreach ($listaCiudades as $ciudad) {
        echo " – $ciudad<br>";
    }
}
?>
