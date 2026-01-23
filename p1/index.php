<?php
// Comentario de una sola linea

/*
        Comentario de Bloque
    */

// hungaro camello
$strNombre = "";
$strEmail = "";
$strMensaje = "";

// Evaluar si hay datos en el POST
if (isset($_POST["strNombre"])) {
    $strNombre = $_POST["strNombre"];
    $strEmail = $_POST["strEmail"];
    $strMensaje = "Bienvenido " . $strNombre . " con correo: " . $strEmail;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer Script de PHP</title>
</head>

<body>

    <h1>Captura de Datos </h1>
    <form action="index.php" method="post">
        <div>
            <label for="strNombre">Nombre Completo</label>
            <input name="strNombre" type="text" id="strNombre"
                value="<?php echo $strNombre; ?>"
                placeholder="Nombre Completo" />
        </div>
        <div>
            <label for="strEmail">Correo</label>
            <input name="strEmail" type="email" id="strEmail"
                value="<?php echo $strEmail; ?>"
                placeholder="Correo" />
        </div>
        <div>
            <button type="submit" name="btnProcesar">Enviar</button>
        </div>
    </form>
    <div>
        <?php
        echo $strMensaje;
        ?>
    </div>
</body>

</html>