<?php
require_once "vendor/autoload.php";

// use Nw\Oop\Productos\Producto;
// use Nw\Oop\Ordenes\Orden;

// $miProducto = new Producto("001", "Panadol Antigripal", 45);
// $miProducto1 = new Producto("002", "Loratadina D", 25);
// $miProducto2 = new Producto("003", "Diclofenaco", 85);

// $miOrden = new Orden("Fulanito de Tal", "uncorreo@corres.com");

// $miOrden->addProducto($miProducto);
// $miOrden->addProducto($miProducto1);
// $miOrden->addProducto($miProducto2);

use Nw\Oop\ChainsOfResp as CR;

$nodoA  = new CR\NodoStandard();
$nodoB  = new CR\NodoActiveDirectory();
$nodoC  = new CR\NodoCerberus();
$nodoD  = new CR\NodoAuth0();

$nodoA->AddNode($nodoB);
$nodoB->AddNode($nodoC);
$nodoC->AddNode($nodoD);





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
        <?php if ($nodoA->Next("auth", "00000008")) {
            echo "Verdadero";
        } else {
            echo "Falso";
        } ?>
    </pre>
</body>

</html>