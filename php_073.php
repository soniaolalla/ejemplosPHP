<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de Usuario: Dibujar Cuadrado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        pre {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <h1>Dibujar Cuadrado con Asteriscos</h1>
    <?php
    /**
     * Función para dibujar un cuadrado de asteriscos
     * @param int $lado Tamaño del lado del cuadrado
     */
    function escribeCuadrado($lado) {
        echo "<p>Cuadrado de $lado x $lado:</p><pre>";
        for ($i = 1; $i <= $lado; $i++) {
            echo str_repeat("* ", $lado) . "\n"; // Repite "*" con un espacio $lado veces
        }
        echo "</pre>";
    }

    // Dibujar cuadrados con diferentes tamaños
    escribeCuadrado(4);
    escribeCuadrado(6);
    ?>
</body>
</html>
