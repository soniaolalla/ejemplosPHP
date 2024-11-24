<!-- Generar una tabla dinámica en HTML usando PHP para mostrar las notas de un alumno en diferentes módulos de formación profesional, junto con las medias generales. -->
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
        tr:last-child td {
            font-weight: bold;
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
    echo "<tr><th>Módulo</th><th>1ª Evaluación</th><th>2ª Evaluación</th><th>Final</th></tr>";
    
    $media1 = 0;
    $media2 = 0;

    foreach ($alumno as $modulo => $notas) {
        $media = ($notas[0] + $notas[1]) / 2;
        echo "<tr><td>$modulo</td><td>{$notas[0]}</td><td>{$notas[1]}</td><td>" . number_format($media, 2) . "</td></tr>";
        $media1 += $notas[0];
        $media2 += $notas[1];
    }

    $media1 /= count($alumno);
    $media2 /= count($alumno);
    $mediaCurso = ($media1 + $media2) / 2;

    echo "<tr><th>MEDIAS</th><td>" . number_format($media1, 2) . "</td><td>" . number_format($media2, 2) . "</td><td>" . number_format($mediaCurso, 2) . "</td></tr>";
    echo "</table>";
    ?>
</body>
</html>
