<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulación de Arrays</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            text-align: center;
        }
        pre {
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            margin: 10px auto;
            width: 80%;
            overflow: auto;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Manipulación de Arrays</h1>
    <?php
    // Ejercicio 1: Ordenar array por claves inversas
    echo "<h2>Array con claves inversas</h2>";
    $numeros = [2 => 3, 1 => 56, 5 => 23, 10 => 11, 4 => 6];
    echo "<pre>Original:\n";
    print_r($numeros);
    echo "</pre>";
    krsort($numeros); // Ordena el array por claves en orden inverso (descendente)
    echo "<pre>Ordenado por claves inversas:\n";
    print_r($numeros);
    echo "</pre>";

    // Ejercicio 2: Ordenar y desordenar un array de números
    echo "<h2>Array numérico</h2>";
    $numerico = [2, 5, 9, 3, 5, 7, 9, 100, 55];
    echo "<pre>Original:\n";
    print_r($numerico);
    echo "</pre>";
    sort($numerico); // Ordena los valores del array en orden ascendente
    echo "<pre>Ordenado:\n";
    print_r($numerico);
    echo "</pre>";
    shuffle($numerico); // Desordena aleatoriamente los valores del array
    echo "<pre>Desordenado:\n";
    print_r($numerico);
    echo "</pre>";

    // Ejercicio 3: Ordenar y desordenar un array de caracteres
    echo "<h2>Array de caracteres</h2>";
    $caracteres = ['b', 'r', 'A', 'H', 'Z', 'C', '4', 'z', 'Ñ'];
    echo "<pre>Original:\n";
    print_r($caracteres);
    echo "</pre>";
    sort($caracteres); // Ordena los valores del array alfabéticamente (orden ASCII)
    echo "<pre>Ordenado:\n";
    print_r($caracteres);
    echo "</pre>";
    shuffle($caracteres); // Desordena aleatoriamente los valores del array
    echo "<pre>Desordenado:\n";
    print_r($caracteres);
    echo "</pre>";

    // Ejercicio 4: Crear, ordenar y desordenar un rango de números
    echo "<h2>Array generado con rango</h2>";
    $rango = range(1, 9); // Genera un array con números consecutivos entre 1 y 9
    echo "<pre>Original:\n";
    print_r($rango);
    echo "</pre>";
    sort($rango); // Ordena el array en orden ascendente
    echo "<pre>Ordenado:\n";
    print_r($rango);
    echo "</pre>";
    shuffle($rango); // Desordena aleatoriamente los valores del array
    echo "<pre>Desordenado:\n";
    print_r($rango);
    echo "</pre>";
    ?>
</body>
</html>
