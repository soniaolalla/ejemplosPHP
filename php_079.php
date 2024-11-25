<!-- Funciones y paso de parámetros en php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demostración de Paso de Parámetros y Funciones en PHP</title>
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
    <h1>Demostración de Paso de Parámetros y Funciones en PHP</h1>

    <h2>1. Paso de Parámetros por Valor</h2>
    <?php
    /**
     * Incrementa y decrementa parámetros pasados por valor.
     * @param int $p1 Primer parámetro
     * @param int $p2 Segundo parámetro
     */
    function pasoValor($p1, $p2) {
        echo "En la función (antes de modificar): p1 = $p1, p2 = $p2<br>";
        $p1++;
        $p2--;
        echo "En la función (después de modificar): p1 = $p1, p2 = $p2<br>";
    }

    $n1 = 10;
    $n2 = 15;
    echo "Antes de llamar a la función: n1 = $n1, n2 = $n2<br>";
    pasoValor($n1, $n2);
    echo "Después de llamar a la función: n1 = $n1, n2 = $n2<br>";
    ?>

    <h2>2. Paso de Parámetros por Referencia</h2>
    <?php
    /**
     * Incrementa y decrementa parámetros pasados por referencia.
     * @param int &$p1 Referencia al primer parámetro
     * @param int &$p2 Referencia al segundo parámetro
     */
    function pasoRef(&$p1, &$p2) {
        echo "En la función (antes de modificar): p1 = $p1, p2 = $p2<br>";
        $p1++;
        $p2--;
        echo "En la función (después de modificar): p1 = $p1, p2 = $p2<br>";
    }

    $n1 = 10;
    $n2 = 15;
    echo "Antes de llamar a la función: n1 = $n1, n2 = $n2<br>";
    pasoRef($n1, $n2);
    echo "Después de llamar a la función: n1 = $n1, n2 = $n2<br>";
    ?>

    <h2>3. Intercambio de Valores</h2>
    <?php
    /**
     * Intercambia los valores de dos variables.
     * @param int &$p1 Referencia al primer parámetro
     * @param int &$p2 Referencia al segundo parámetro
     */
    function intercambia(&$p1, &$p2) {
        $temp = $p1;
        $p1 = $p2;
        $p2 = $temp;
    }

    $n1 = 10;
    $n2 = 15;
    echo "Antes de llamar a la función: n1 = $n1, n2 = $n2<br>";
    intercambia($n1, $n2);
    echo "Después de llamar a la función: n1 = $n1, n2 = $n2<br>";
    ?>

    <h2>4. División con Resto</h2>
    <?php
    /**
     * Realiza una división entera y calcula el resto.
     * @param int $dividendo Número a dividir
     * @param int $divisor Número por el cual se divide
     * @param int &$resto Referencia para almacenar el resto
     * @return int Resultado de la división entera
     */
    function divide($dividendo, $divisor, &$resto) {
        $resto = $dividendo % $divisor;
        return intdiv($dividendo, $divisor);
    }

    $n1 = 30;
    $n2 = 4;
    $resultado = divide($n1, $n2, $resto);
    echo "$n1 dividido entre $n2 es $resultado y el resto es $resto<br>";
    ?>
</body>
</html>
