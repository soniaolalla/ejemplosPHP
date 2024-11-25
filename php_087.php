<!-- Manipulación de Fechas y Tiempos en PHP -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulación de Fechas y Tiempos en PHP</title>
</head>
<body>
    <h1>Demostración de Fechas y Tiempos en PHP</h1>

    <?php
    /**
     * Ejemplo 1: Fechas actuales y futuras
     */
    echo "<h2>1. Fechas Actuales y Próximas</h2>";

    $hoy = date('Y-m-d');
    echo "Fecha de Hoy: $hoy<br>";

    $proxima_semana = time() + (7 * 24 * 60 * 60);
    echo "Próxima Semana: " . date('d-m-Y', $proxima_semana) . "<br>";

    /**
     * Ejemplo 2: Fecha de Nacimiento con Formato Personalizado
     */
    echo "<h2>2. Fecha de Nacimiento</h2>";

    $fecha_nacimiento = mktime(8, 0, 0, 9, 10, 1994);
    echo "Fecha de Nacimiento: " . date('l jS \of F \o\f Y', $fecha_nacimiento) . "<br>";

    /**
     * Ejemplo 3: Días de la Semana en Diferentes Idiomas
     */
    echo "<h2>3. Días de la Semana en Diferentes Idiomas</h2>";

    // Función para mostrar el día de la semana en un idioma específico
    function mostrarDiaSemana($locale, $timestamp) {
        $formatter = new IntlDateFormatter(
            $locale,
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
            date_default_timezone_get(),
            IntlDateFormatter::GREGORIAN,
            "EEEE" // Día de la semana completo
        );
        return $formatter->format($timestamp);
    }

    $hoy_timestamp = time();
    echo "En Inglés: " . mostrarDiaSemana("en_US", $hoy_timestamp) . "<br>";
    echo "En Finlandés: " . mostrarDiaSemana("fi_FI", $hoy_timestamp) . "<br>";
    echo "En Francés: " . mostrarDiaSemana("fr_FR", $hoy_timestamp) . "<br>";
    echo "En Alemán: " . mostrarDiaSemana("de_DE", $hoy_timestamp) . "<br>";
    echo "En Español: " . mostrarDiaSemana("es_ES", $hoy_timestamp) . "<br>";

    /**
     * Ejemplo 4: Fecha de Última Modificación
     */
    echo "<h2>4. Fecha de Última Modificación del Archivo</h2>";

    echo "Última Modificación: " . date('j - m - Y', getlastmod()) . "<br>";
    ?>
</body>
</html>

