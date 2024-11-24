<!-- Generar dos tablas HTML utilizando PHP para mostrar los días de cada mes y su ordenación. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días de Cada Mes</title>
    <style>
        table {
            width: 40%;
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
    $DiasMes = [
        'Enero' => 31, 'Febrero' => 28, 'Marzo' => 31, 'Abril' => 30,
        'Mayo' => 31, 'Junio' => 30, 'Julio' => 31, 'Agosto' => 31,
        'Septiembre' => 30, 'Octubre' => 31, 'Noviembre' => 30, 'Diciembre' => 31
    ];

    // Mostrar los días de cada mes en una tabla
    echo "<table>";
    echo "<tr><th>Mes</th><th>Días</th></tr>";
    foreach ($DiasMes as $mes => $dias) {
        echo "<tr><td>$mes</td><td>$dias</td></tr>";
    }
    echo "</table>";

    // Ordenar por número de días
    asort($DiasMes);
    echo "<table>";
    echo "<tr><th>Mes (Ordenado por Días)</th><th>Días</th></tr>";
    foreach ($DiasMes as $mes => $dias) {
        echo "<tr><td>$mes</td><td>$dias</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
