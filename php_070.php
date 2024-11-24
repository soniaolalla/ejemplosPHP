<!-- Manipulación de cadenas en php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones con Strings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, h2 {
            text-align: center;
        }
        pre {
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            margin: 10px auto;
            width: 90%;
            overflow: auto;
        }
        .section {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <h1>Demostración de Funciones con Strings</h1>

    <div class="section">
        <h2>1. Longitud de cadena con y sin espacios</h2>
        <?php
        $cadena = "      Hola esto es una prueba de cadenas     ";
        // strlen: Calcula la longitud de la cadena incluyendo espacios
        echo "<pre>Cadena original: \"$cadena\" tiene " . strlen($cadena) . " caracteres.</pre>";

        // trim: Elimina los espacios al principio y al final de la cadena
        $nuevaCadena = trim($cadena);
        echo "<pre>Cadena sin espacios: \"$nuevaCadena\" tiene " . strlen($nuevaCadena) . " caracteres.</pre>";
        ?>
    </div>

    <div class="section">
        <h2>2. Subcadenas</h2>
        <?php
        $cadena = "Talavera de la Reina";
        // substr: Extrae una subcadena desde la posición 15 con longitud 3
        $subcadena = substr($cadena, 15, 3);
        echo "<pre>Cadena completa: \"$cadena\"</pre>";
        echo "<pre>Subcadena extraída: \"$subcadena\"</pre>";
        ?>
    </div>

    <div class="section">
        <h2>3. Código ASCII de caracteres</h2>
        <?php
        echo "<pre>";
        // chr: Devuelve el carácter correspondiente al código ASCII
        // ord: Devuelve el código ASCII de un carácter
        for ($i = 32; $i < 128; $i++) { 
            echo "$i : " . chr($i) . "\n";
        }
        echo "ASCII de 'a': " . ord('a') . "\n";
        echo "ASCII de 'A': " . ord('A');
        echo "</pre>";
        ?>
    </div>

    <div class="section">
        <h2>4. Separar y dividir cadenas</h2>
        <?php
        $fecha = "04-30-1973";
        // explode: Divide una cadena en un array usando el carácter '-'
        $separados = explode('-', $fecha);
        echo "<pre>Fecha separada: Mes: $separados[0]; Día: $separados[1]; Año: $separados[2]</pre>";

        echo "<pre>Array de componentes de la fecha:\n";
        print_r($separados); // Muestra el array resultante
        echo "</pre>";
        ?>
    </div>

    <div class="section">
        <h2>5. Explode e Implode</h2>
        <?php
        $texto = "Esto es una prueba de cadena con explode";
        // explode: Divide la cadena en palabras separadas por espacios
        $separados = explode(' ', $texto);
        echo "<pre>Array creado con explode:\n";
        print_r($separados);
        echo "</pre>";

        // implode: Une los elementos del array en una cadena separada por '-'
        $juntos = implode('-', $separados);
        echo "<pre>Cadena unida con implode: \"$juntos\"</pre>";
        ?>
    </div>

    <div class="section">
        <h2>6. Cambiar mayúsculas y minúsculas</h2>
        <?php
        $cadena = "Talavera de la Reina";
        // strtolower: Convierte la cadena a minúsculas
        echo "<pre>Cadena en minúsculas: \"" . strtolower($cadena) . "\"</pre>";

        // strtoupper: Convierte la cadena a mayúsculas
        echo "<pre>Cadena en mayúsculas: \"" . strtoupper($cadena) . "\"</pre>";

        // str_replace: Reemplaza 'Reina' por 'Princesa' en la cadena
        $modificada = str_replace('Reina', 'Princesa', $cadena);
        echo "<pre>Cadena modificada: \"$modificada\"</pre>";
        ?>
    </div>

    <div class="section">
        <h2>7. Implode con delimitador personalizado</h2>
        <?php
        $texto = ["Uno", "Dos", "Tres", "Cuatro", "Cinco"];
        // implode: Une los elementos del array con '|*|' como separador
        $unidos = implode('|*|', $texto);
        echo "<pre>Cadena unida con delimitador personalizado: \"$unidos\"</pre>";
        ?>
    </div>

    <div class="section">
        <h2>8. Expresión regular insensible</h2>
        <?php
        $texto = "Uno-Dos";
        // preg_quote: Escapa caracteres especiales para usarlos en expresiones regulares
        $expreg = preg_quote($texto, '/');
        echo "<pre>Expresión regular escapada: \"$expreg\"</pre>";
        ?>
    </div>
</body>
</html>
