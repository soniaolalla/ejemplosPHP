<!-- Dibujar dos cuadrados con líneas verticale y horizontales. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de Usuario: Dibujar Cuadrado Hueco</title>
    <style>
        body {
            font-family: Courier, monospace; /* Fuente monoespaciada para una alineación precisa */
            margin: 20px;
        }
        pre {
            font-family: Courier, monospace;
            line-height: 1;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Dibujar Cuadrado Hueco con Funciones</h1>
    <?php
    /**
     * Dibuja la línea superior o inferior de un cuadrado
     * @param int $n Número de caracteres en la línea
     */
    function escribeLinea($n) {
        echo "+" . str_repeat("-", $n - 2) . "+\n"; // Borde superior o inferior con "+"
    }

    /**
     * Dibuja una línea interna del cuadrado con bordes
     * @param int $n Número de caracteres en la línea
     */
    function escribeLineaIntena($n) {
        echo "|" . str_repeat(" ", $n - 2) . "|\n"; // Líneas internas con bordes verticales "|"
    }

    /**
     * Dibuja un cuadrado hueco con un lado dado
     * @param int $lado Tamaño del lado del cuadrado
     */
    function escribeCuadrado($lado) {
        echo "<pre>";
        escribeLinea($lado); // Línea superior
        for ($i = 2; $i < $lado; $i++) {
            escribeLineaIntena($lado); // Líneas internas
        }
        escribeLinea($lado); // Línea inferior
        echo "</pre>";
    }

    // Dibujar cuadrados con diferentes tamaños
    escribeCuadrado(4);
    escribeCuadrado(10);
    ?>
</body>
</html>
