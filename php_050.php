<!-- Generar una tabla dinámica en HTML utilizando PHP para mostrar las notas de un alumno en diferentes módulos. Se trabajará con un array asociativo multidimensional que contiene los módulos y las notas de las dos evaluaciones. El objetivo es calcular la nota media final de cada módulo y mostrarla en una tabla. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas del Alumno</title>
    <style>
        table {
            width: 30%;
            margin: 20px auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
            background-color: #f9f9f9;
        }
        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #fafafa;
        }
    </style>
</head>
<body>
    <?php
    $alumno = [
        "IAW" => [6, 7],
        "ABD" => [5, 8],
        "EIE" => [8, 9],
        "ASO" => [8, 8],
        "SRI" => [9, 8],
        "SAD" => [9, 9]
    ];

    echo "<table>";
    echo "<tr><th colspan='4'>Notas del Alumno</th></tr>";
    echo "<tr><th>Módulo</th><th>1ª Evaluación</th><th>2ª Evaluación</th><th>Nota Final</th></tr>";
    
    foreach ($alumno as $modulo => $listaNotas) {
        echo "<tr><td>$modulo</td>";
        $media = 0;
        foreach ($listaNotas as $nota) {
            $media += $nota;
            echo "<td>$nota</td>";
        }
        $media /= count($listaNotas); // Calcula la media basada en el número de notas. Es lo mismo que $media = $media / count($listaNotas);
        echo "<td>" . number_format($media, 2) . "</td></tr>"; // Formato a dos decimales
    }
    echo "</table>";
    ?>
</body>
</html>



