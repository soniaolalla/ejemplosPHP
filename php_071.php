<!-- preg_quote convierte una cadena de texto en una versión segura para ser utilizada dentro de expresiones regulares. Esto se hace escapando los caracteres especiales que tienen un significado en expresiones regulares (como *, ., ?, +, etc.), para que sean tratados como texto literal. -->

<!-- En las expresiones regulares, ciertos caracteres tienen un significado especial. Por ejemplo:
.: Significa "cualquier carácter".
*: Significa "cero o más repeticiones".
-: Puede indicar un rango dentro de [].
Si deseas buscar texto literal que incluya estos caracteres (por ejemplo, buscar "Uno-Dos" tal cual), necesitas escapar esos caracteres para evitar que sean interpretados como operadores. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulación de Strings: Expresiones Regulares</title>
</head>
<body>
    <h1>Demostración de Expresiones Regulares con Strings</h1>
    <?php
    // Texto de entrada
    $texto = "Uno-Dos";

    // preg_quote: Escapa caracteres especiales para expresiones regulares
    $expreg = preg_quote($texto, '/');

    // Mostrar el texto escapado como expresión regular segura
    echo "<p>Texto original: \"$texto\"</p>";
    echo "<p>Expresión regular escapada: \"$expreg\"</p>";
    ?>
</body>
</html>
