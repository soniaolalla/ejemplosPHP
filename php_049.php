<!-- Aarray asociativo multidimensional en PHP para representar países y sus ciudades principales. 
Cada clave representa un país (por ejemplo, "España").
El valor asociado a cada clave es un array con las ciudades de ese país.
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Países y Ciudades</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        .pais {
            font-weight: bold;
            margin-top: 20px;
        }
        .ciudad {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <?php
    $ciudades = [
        "España" => ["Madrid", "Barcelona", "Sevilla"],
        "Italia" => ["Roma", "Milán", "Venecia"],
        "Holanda" => ["Ámsterdam", "Rotterdam"]
    ];

    foreach ($ciudades as $pais => $listaCiudades) {
        echo "<div class='pais'>País: $pais</div>";
        foreach ($listaCiudades as $ciudad) {
            echo "<div class='ciudad'>$ciudad</div>";
        }
    }
    ?>
</body>
</html>
