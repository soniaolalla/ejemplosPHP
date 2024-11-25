<!-- Ámbito de variables y formularios -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demostración de Ámbito de Variables y Formularios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1, h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Demostración de Ámbito de Variables y Formularios en PHP</h1>

    <!-- 1. Ámbito de Variables -->
    <h2>1. Ámbito de Variables</h2>
    <?php
    $a = 10; // Variable global

    /**
     * Accede a la variable $a sin declararla en la función. Dará error.
     */
    function llamada1() {
        echo "Valor de \$a en llamada1 (sin acceso): $a<br>";
    }

    /**
     * Declara una variable local dentro de la función
     */
    function llamada2() {
        $a = 1000;
        echo "Valor de \$a en llamada2 (local): $a<br>";
        $a++;
    }

    /**
     * Usa la variable global $a con el modificador global
     */
    function llamada3() {
        global $a;
        echo "Valor de \$a en llamada3 (global): $a<br>";
        $a--;
    }

    /**
     * Accede a la variable global $a usando el array GLOBALS
     */
    function llamada4() {
        echo "Valor de \$a en llamada4 (GLOBALS): " . $GLOBALS['a'] . "<br>";
    }

    // Llamadas a las funciones
    llamada1();
    llamada2();
    llamada3();
    llamada4();
    echo "Valor de \$a en el programa después de las llamadas: $a<br>";
    ?>

    <!-- 2. Uso de Variables Estáticas -->
    <h2>2. Uso de Variables Estáticas</h2>
    <?php
    /**
     * Incrementa y mantiene el valor de una variable estática entre llamadas
     */
    function cuentaveces() {
        static $nveces = 0;
        $nveces++;
        echo "Me han llamado $nveces veces<br>";
    }

    // Llamadas repetidas a la función
    cuentaveces();
    cuentaveces();
    cuentaveces();
    cuentaveces();
    ?>


</body>
</html>
