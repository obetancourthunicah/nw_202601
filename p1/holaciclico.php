<?php
$strMensaje = "";
$numCiclos = 0;

if (isset($_POST["btnProcesar"])) {
    $numCiclos = intval($_POST["numCliclos"]);
    $strMensaje = "Hola mundo!!!!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>

<body>
    <h1>Ciclos</h1>

    <form action="holaciclico.php" method="post">
        <div>
            <label for="cmbCiclos">Cantidad de Ciclos</label>
            <select id="cmbCiclos" name="numCliclos">
                <option value="1">1</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="75">75</option>
                <option value="100">100</option>
            </select>
        </div>
        <button type="submit" name="btnProcesar">Procesar</button>
    </form>
    <div>
        <?php
        for ($i = 0; $i < $numCiclos; $i++) {
            echo $strMensaje . "<br/>";
        }
        ?>
    </div>
</body>

</html>