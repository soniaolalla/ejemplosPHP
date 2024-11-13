<!--ENUNCIADO:Se desea almacenar y mostrar la calificación de cada uno de los alumnos de asir2 en el módulo IAW. Raliza un programa en php.
1. Pensar en la estructura a elegir
2. Mostrarlo-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calificaciones de estudiantes</h2>
    <?php
        $calificaciones = [
            "Carlos" => 5,
            "Pepe" => 7,
            "Luis" => 2,
            "Ana" => 3
        ];

        foreach ($calificaciones as $nombre => $nota){
            echo "$nombre ha obtenido una calificación de $nota en IAW";
        };
    ?>


</body>
</html>
