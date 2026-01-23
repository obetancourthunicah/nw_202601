<?php
$intOperando1 = 0;
$intOperando2 = 0;

$dblResultado = 0;
$strMensaje = "";
//Suma
if (isset($_POST["btnAdd"])) {
    $intOperando1 = intval($_POST["intOperando1"]);
    $intOperando2 = intval($_POST["intOperando2"]);
    $dblResultado = $intOperando1 + $intOperando2;
    $strMensaje = sprintf("La suma de %d y %d es igual a %d", $intOperando1, $intOperando2, $dblResultado);
} elseif (isset($_POST["btnSub"])) {
    $intOperando1 = intval($_POST["intOperando1"]);
    $intOperando2 = intval($_POST["intOperando2"]);
    $dblResultado = $intOperando1 - $intOperando2;
    $strMensaje = sprintf("La resta de %d y %d es igual a %d", $intOperando1, $intOperando2, $dblResultado);
} elseif (isset($_POST["btnMul"])) {
} elseif (isset($_POST["btnDiv"])) {
} elseif (isset($_POST["intOperando1"])) {
    $strMensaje = "Error, la operación no es válida.";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora Simple </h1>
    <form action="calculadora.php" method="post">
        <div>
            <label for="intOperando1">Número 1:</label>
            <input type="number" value="<?php echo $intOperando1; ?>" id="intOperando1" name="intOperando1" />
        </div>
        <div>
            <label for="intOperando2">Número 2:</label>
            <input type="number" value="<?php echo $intOperando2; ?>" id="intOperando2" name="intOperando2" />
        </div>
        <div>
            <button type="submit" name="btnAdd">Sumar</button>&nbsp;
            <button type="submit" name="btnSub">Restar</button>&nbsp;
            <button type="submit" name="btnMul">Multiplicar</button>&nbsp;
            <button type="submit" name="btnDiv">Dividir</button>&nbsp;
        </div>
    </form>
    <div>
        <?php echo $strMensaje; ?>
    </div>
</body>

</html>