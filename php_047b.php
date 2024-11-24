<?php
// Definir el array multidimensional con las ciudades
$ciudades = array(
    "España" => array("Madrid", "Barcelona", "Sevilla"),
    "Italia" => array("Roma", "Milán", "Venecia"),
    "Holanda" => array("Amsterdam", "Rotterdam")
);

// Recorrer el array utilizando foreach (recomendado en lugar de each)
foreach ($ciudades as $pais => $listaCiudades) {
    echo "<h3>País: $pais</h3>";
    foreach ($listaCiudades as $indice => $ciudad) {
        echo "Índice ciudad: $indice - Ciudad: $ciudad<br>";
    }
}
?>
