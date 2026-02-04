<?php
require_once "vendor/autoload.php";

use Nw\Oop\Productos\Producto;
use Nw\Oop\Ordenes\Orden;

$miProducto = new Producto("001", "Panadol Antigripal", 45);
$miProducto1 = new Producto("002", "Loratadina D", 25);
$miProducto2 = new Producto("003", "Diclofenaco", 85);

$miOrden = new Orden("Fulanito de Tal", "uncorreo@corres.com");

$miOrden->addProducto($miProducto);
$miOrden->addProducto($miProducto1);
$miOrden->addProducto($miProducto2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php print_r($miOrden->toString()); ?>
    </pre>
</body>

</html>