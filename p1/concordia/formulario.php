<?php


require_once "libreria.php";

$codigoProducto = 0;
$codigoRefresco = 0;
$txtNombre = "";
$txtEmail = "";

if (isset($_POST["btnEnviar"])) {
    $codigoProducto = intval($_POST["cmbProducto"]);
    $codigoRefresco = intval($_POST["cmbRefrescos"]);
    $txtNombre = $_POST["txtNombre"];
    $txtEmail = $_POST["txtEmail"];
    $productoSeleccionado = getProductoByCodigo($codigoProducto);
    $refrescoSeleccionado = getRefrescoByCodigo($codigoRefresco);

    $estructraDeOrden = [
        "nombre" => $txtNombre,
        "correo" => $txtEmail,
        "producto" => $productoSeleccionado,
        "refresco" => $refrescoSeleccionado,
        "subtotal" => $productoSeleccionado["precio"] + $refrescoSeleccionado["precio"],
        "iva" => ($productoSeleccionado["precio"] * $productoSeleccionado["iva"]) +
            ($refrescoSeleccionado["precio"] * $refrescoSeleccionado["iva"]),
    ];
    $estructraDeOrden["total"] = $estructraDeOrden["subtotal"]  + $estructraDeOrden["iva"];

    guardarEnSession($estructraDeOrden);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Pulpería La Concordia</title>
    <h1>Compra de Pulpería</h1>
    <form action="formulario.php" method="post">
        <div>
            <label for="cmbProducto">Seleccione un Producto: </label>
            <select id="cmbProducto" name="cmbProducto">
                <?php
                $productos = getProductos();
                foreach ($productos as $producto) {
                    $value = $producto["codigo"];
                    $descripcion = $producto["descripcion"];
                    $precio = $producto["precio"];
                    $grabado = ($producto["iva"] > 0) ? "G" : "";
                    echo '<option value="' .
                        $value . '">' . $descripcion .
                        ' (' . $precio . ') '
                        . $grabado . '</option>';
                }
                ?>
            </select>
        </div>
        <div>
            <label for="cmbRefrescos">Seleccione un Refresco: </label>
            <select id="cmbRefrescos" name="cmbRefrescos">
                <?php
                $refrescos = getRefrescos();
                foreach ($refrescos as $refresco) {
                    $value = $refresco["codigo"];
                    $descripcion = $refresco["descripcion"];
                    $precio = $refresco["precio"];
                    $grabado = ($refresco["iva"] > 0) ? "G" : "";
                    echo '<option value="' .
                        $value . '">' . $descripcion .
                        ' (' . $precio . ') '
                        . $grabado . '</option>';
                }
                ?>
            </select>
        </div>
        <div>
            <label for="txtNombre">Nombre Cliente: </label>
            <input type="text" name="txtNombre" id="txtnombre"
                placeholder="Nombre Completo del Cliente" />
        </div>
        <div>
            <label for="txtEmail">Correo Electrónico: </label>
            <input type="email" name="txtEmail" id="txtEmail"
                placeholder="Corre  del Cliente" />
        </div>
        <div>
            <button type="submit" name="btnEnviar">Enviar</button>
        </div>
    </form>
</head>

<body>

</body>

</html>