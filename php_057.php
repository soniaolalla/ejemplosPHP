<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días de Cada Mes</title>
    <style>
        table {
            width: 30%;
            margin: 20px auto;
            border: 1px solid #000;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            padding: 8px;
            border: 1px solid #000;
        }
        th {
            font-weight: bold;
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

    // Mostrar días de cada mes
    echo "<h2>Días de cada mes</h2>";
    echo "<table>";
    echo "<tr><th>Mes</th><th>Días</th></tr>";
    foreach ($DiasMes as $mes => $ndias) {
        echo "<tr><td>$mes</td><td>$ndias</td></tr>";
    }
    echo "</table>";

    // Ordenar de mayor a menor
    arsort($DiasMes);

    // Mostrar ordenado
    echo "<h2>Meses ordenados de mayor a menor</h2>";
    echo "<table>";
    echo "<tr><th>Mes</th><th>Días</th></tr>";
    foreach ($DiasMes as $mes => $ndias) {
        echo "<tr><td>$mes</td><td>$ndias</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
