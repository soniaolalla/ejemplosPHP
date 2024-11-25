<!-- htmlspecialchars se utiliza para convertir caracteres especiales en su representación de entidades HTML. Esto es importante para evitar problemas de seguridad como inyección de código HTML o inyección de JavaScript (XSS, Cross-Site Scripting). -->
 <!-- Ejemplo:

    $name = "<script>alert('Hack!');</script>";
    echo htmlspecialchars($name);

Salida:
    &lt;script&gt;alert(&#039;Hack!&#039;);&lt;/script&gt;
El <script> se convierte en una representación segura (&lt;script&gt;) y no se ejecutará en el navegador. -->



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzería - Ventas del Día</title>
    <style>
        /* Estilos básicos para el formulario */
        form {
            max-width: 300px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        fieldset {
            border: 1px solid #ccc;
            padding: 10px;
        }
        label {
            display: block;
            margin: 5px 0;
        }
        input[type="number"] {
            width: 80px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            margin-top: 15px;
        }
        .resultados {
            max-width: 400px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Registro de Ventas - Pizzería</h1>

    <!-- Formulario de entrada de datos -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <legend>Pizzas Vendidas Hoy</legend>
            <label for="jamon">Jamón</label>
            <input type="number" name="jamon" id="jamon" min="0">
            
            <label for="atun">Atún</label>
            <input type="number" name="atun" id="atun" min="0">
            
            <label for="vegetal">Vegetal</label>
            <input type="number" name="vegetal" id="vegetal" min="0">
            
            <label for="hawaiana">Hawaiana</label>
            <input type="number" name="hawaiana" id="hawaiana" min="0">
        </fieldset>
        
        <label for="comida">Gasto en Comida:</label>
        <input type="number" name="comida" id="comida" min="0">

        <input type="submit" value="Calcular">
    </form>

    <!-- Procesamiento de datos y cálculo -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Precios de las pizzas
        $precio_pizza = 20;
        $t_jamon = $t_atun = $t_vegetal = $t_hawaiana = $t_comida = 0;

        echo '<div class="resultados"><h2>Resultados</h2>';

        // Procesar pizzas de jamón
        if (!empty($_POST['jamon'])) {
            $t_jamon = $_POST['jamon'] * $precio_pizza;
            echo "<p>Pizzas de Jamón vendidas: {$_POST['jamon']} (Total: $t_jamon €)</p>";
        }

        // Procesar pizzas de atún
        if (!empty($_POST['atun'])) {
            $t_atun = $_POST['atun'] * $precio_pizza;
            echo "<p>Pizzas de Atún vendidas: {$_POST['atun']} (Total: $t_atun €)</p>";
        }

        // Procesar pizzas vegetales
        if (!empty($_POST['vegetal'])) {
            $t_vegetal = $_POST['vegetal'] * $precio_pizza;
            echo "<p>Pizzas Vegetales vendidas: {$_POST['vegetal']} (Total: $t_vegetal €)</p>";
        }

        // Procesar pizzas hawaianas
        if (!empty($_POST['hawaiana'])) {
            $t_hawaiana = $_POST['hawaiana'] * $precio_pizza;
            echo "<p>Pizzas Hawaianas vendidas: {$_POST['hawaiana']} (Total: $t_hawaiana €)</p>";
        }

        // Procesar gasto en comida
        if (!empty($_POST['comida'])) {
            $t_comida = $_POST['comida'];
            echo "<p>Gasto en comida: $t_comida €</p>";
        }

        // Total general
        $total_ventas = $t_jamon + $t_atun + $t_vegetal + $t_hawaiana;
        echo "<h3>Total Ventas: $total_ventas €</h3>";
        echo '</div>';
    }
    ?>
</body>
</html>
