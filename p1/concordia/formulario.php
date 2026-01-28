<?php


require_once "libreria.php";

/*
 c++ --> include stdio.h
 c# -->  using system.data.sqlserver;
 vb -->  imports system.data.sqlserver;
 javascript|typescript esm2026 + --> import * from 'libreria';
 javascript < esm2025 --> const vari = require 'libreria';
 python --> import objetos from 'libreria'
 python --> import 'libreria';
 go --> import (
    fmt,
    io,
    net,
    string
 )
*/

//
// include "namspace/..n../?object" | "path/ToFile/";
// // Me permite incluir varias veces el mismo archivos o la misma libreria.
// include_once "namspace/..n../?object" | "path/ToFile/";
// // 
// require "namspace/..n../?object" | "path/ToFile/";

// require_once "namspace/..n../?object" | "path/ToFile/";



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Pulpería La Concordia</title>
    <h1>Compra de Pulpería</h1>
    <form action="formulario.php" method="post">

    </form>
    <div>

        <?php

        print_r(getProductos());

        ?>
    </div>
</head>

<body>

</body>

</html>