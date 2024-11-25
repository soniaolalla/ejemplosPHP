<!-- programa que utiliza una función personalizada en PHP para generar tablas HTML de manera dinámica. Cada celda puede contener un carácter personalizado, y las dimensiones (número de filas y columnas) son configurables. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de Usuario: Crear Tablas</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }
        td {
            width: 30px;
            height: 30px;
            text-align: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Generador de Tablas con PHP</h1>
    <?php
    /**
     * Función para generar una tabla con celdas personalizadas
     * @param int $ancho Número de columnas
     * @param int $alto Número de filas
     * @param string $car Contenido de cada celda
     */
    function creaTabla($ancho, $alto, $car) {
        echo "<table border='1'>";
        for ($i = 1; $i <= $alto; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $ancho; $j++) {
                echo "<td>$car</td>"; // Rellena cada celda con el carácter proporcionado
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    // Crear tablas con diferentes tamaños y caracteres
    creaTabla(4, 10, 'A'); // Tabla de 4 columnas y 10 filas con 'A'
    creaTabla(12, 6, '*'); // Tabla de 12 columnas y 6 filas con '*'
    ?>
</body>
</html>
