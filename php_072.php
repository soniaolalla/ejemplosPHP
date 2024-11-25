<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .output {
            font-family: monospace;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Escribir Asteriscos</h1>
    <?php
    // Función para escribir asteriscos
    function escribeAsterisco($n) {
        echo str_repeat("*", $n) . "<br>"; // Repite el carácter "*" $n veces
    }

    $nume = 13;

    echo "<div class='output'>";
    escribeAsterisco(20); // Imprime 20 asteriscos
    escribeAsterisco($nume); // Imprime 13 asteriscos
    echo "</div>";
    ?>
</body>
</html>
