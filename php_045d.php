<!-- Hay que realizar el inventario de una tienda y se necesita organizar la información. Cada producto tiene un nombre, precio y la cantidad disponible en stock.  Almacena esta informaicón en la estructura adecudada y luego muestrala en una lista organizada --> 
<!-- Crea un array asociativo donde cada clave sea el nombre de un producto.
Cada producto debe tener un sub-array con las claves precio (el precio del producto) y stock (la cantidad disponible).-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin: auto; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Catálogo de Productos</h2>
    
    <?php
    // Array asociativo de productos con precio y stock
    $productos = [
        "Laptop" => ["precio" => 800, "stock" => 5],
        "Mouse" => ["precio" => 20, "stock" => 30],
        "Teclado" => ["precio" => 50, "stock" => 12],
        "Monitor" => ["precio" => 150, "stock" => 7]
    ];
    ?>

    <table>
        <tr>
            <th>Producto</th>
            <th>Precio (€)</th>
            <th>Cantidad en Stock</th>
        </tr>
        <?php foreach ($productos as $nombre => $detalles): ?>
            <tr>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $detalles['precio']; ?></td>
                <td><?php echo $detalles['stock']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
