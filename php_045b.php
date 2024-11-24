<!--Arrays multidimensionales: Son arrays cuyos componenetes es otro array. Cada clave tendrá otro array como valor. 
-->
<!--Se necesita gestionar las notas de varios estudiantes en tres asignaturas: matemáticas, lengua e historia. --> 
<!-- SOLUCIÓN:  crear un array asociativo donde la clave sea el nombre del estudiante -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas de Estudiantes</title>
    <style>
        table { border-collapse: collapse; width: 60%; margin: auto; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Notas de Estudiantes</h2>
    
    <?php
    // Array asociativo con las notas de estudiantes
    $estudiantes = [
        "Carlos" => ["Matemáticas" => 8, "Lengua" => 7, "Historia" => 9],
        "Marta" => ["Matemáticas" => 6, "Lengua" => 9, "Historia" => 8],
        "Luis" => ["Matemáticas" => 5, "Lengua" => 6, "Historia" => 7],
        "Ana" => ["Matemáticas" => 10, "Lengua" => 8, "Historia" => 9]
    ];
    ?>

    <table>
        <tr>
            <th>Estudiante</th>
            <th>Matemáticas</th>
            <th>Lengua</th>
            <th>Historia</th>
            <th>Promedio</th>
        </tr>
        <?php foreach ($estudiantes as $nombre => $notas): ?>
            <tr>
                
                <td><?php echo $nombre; ?></td>
                <td><?php echo $notas["Matemáticas"]; ?></td>
                <td><?php echo $notas["Lengua"]; ?></td>

                <td><?php echo $notas["Historia"]; ?></td>
                <td>
                    <?php
                    // Calcular el promedio
                    $promedio = array_sum($notas) / count($notas);
                    echo number_format($promedio, 2); // Mostrar con dos decimales
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>