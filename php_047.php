<?php
// Array multidimensional con países y sus ciudades
$ciudades = array(
    "España" => array("Madrid", "Barcelona", "Sevilla"),
    "Italia" => array("Roma", "Milán", "Venecia"),
    "Holanda" => array("Amsterdam", "Rotterdam")
);

// Recorrer el array usando foreach (recomendado en PHP moderno)
foreach ($ciudades as $pais => $listaCiudades) {
    foreach ($listaCiudades as $ciudad) {
        // Mostrar la información del país y la ciudad
        echo "<br> País: $pais - Ciudad: $ciudad";
    }
}
?>
