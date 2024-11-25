    <!--. Formulario de Suma -->
    <h2>Formulario de Suma</h2>
    <form name="formulario" method="GET">
        <label for="n1">Introduce un número:</label>
        <input type="text" id="n1" name="n1"><br>
        <label for="n2">Introduce otro número:</label>
        <input type="text" id="n2" name="n2"><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    /**
     * Procesa la suma de dos números enviados por el formulario
     */
    if (isset($_GET['n1']) && isset($_GET['n2'])) {
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $res = $n1 + $n2;
        echo "<h2>La suma de $n1 y $n2 es $res</h2><br>";
    }
    ?>