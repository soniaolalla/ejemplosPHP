<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Suma</title>
</head>
<body>
    <h1>Formulario para Sumar Números</h1>

    <!-- Formulario que envía datos a php_083.php -->
    <form name="formulario" action="php_082.php" method="GET">
        <label for="n1">Introduce un número:</label>
        <input type="text" id="n1" name="n1" required><br>
        
        <label for="n2">Introduce otro número:</label>
        <input type="text" id="n2" name="n2" required><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // Comprueba si los parámetros n1 y n2 están definidos en la URL
    if (isset($_GET['n1']) && isset($_GET['n2'])) {
        $n1 = $_GET['n1']; // Obtiene el primer número
        $n2 = $_GET['n2']; // Obtiene el segundo número
        $res = $n1 + $n2; // Calcula la suma
        echo "<h2>La suma de $n1 y $n2 es $res</h2><br>";
    }
    ?>
</body>
</html>
