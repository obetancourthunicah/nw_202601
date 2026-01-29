<?php

session_start();

// $edad = 14;
// // -> una direccion de memoria ram.  ab1023 -> 14
// // -> Simbol table -->.  $edad -> ab1023 


// function getProductosA($intEdad /*-> ab1025*/){
//     $intEdad = 16 ;//. ab1025 -> 16
// }

// function getProductosB(&$intEdad /*-> null */) {
//     $intEdad = 16; // -> ab1023
// }

// //

// getProductosA($edad); // ab1023 == ab1025

// getProductosB($edad); // &intEdad -> ab1023

// /*

// */

function getProductos()
{
    $arrProductos = []; //array();
    $producto1 = [
        "codigo" => 1,
        "descripcion" => "Frijoles Fritos Naturas 1lb",
        "precio" => 83.00,
        "iva" => 0.15
    ];
    $producto2 = [
        "codigo" => 2,
        "descripcion" => "Tortillas  Margarita 10 pza",
        "precio" => 25.00,
        "iva" => 0
    ];

    $arrProductos[] = $producto1;
    $arrProductos[] = $producto2;

    return $arrProductos;
}

function getProductoByCodigo($codigo)
{
    $productos = getProductos();
    $producto = null;
    foreach ($productos as $iProducto) {
        if ($iProducto["codigo"] === $codigo) {
            $producto = $iProducto;
            break;
        }
    }
    return $producto;
}

function getRefrescos()
{
    $arrProductos = []; //array();
    $producto1 = [
        "codigo" => 4,
        "descripcion" => "Coca Cola Zero 1lt",
        "precio" => 35.00,
        "iva" => 0.15
    ];
    $producto2 = [
        "codigo" => 5,
        "descripcion" => "Jugo de Naranja Yojoa 1gl",
        "precio" => 65.00,
        "iva" => 0
    ];

    $arrProductos[] = $producto1;
    $arrProductos[] = $producto2;

    return $arrProductos;
}

function getRefrescoByCodigo($codigo)
{
    $refrescos = getRefrescos();
    $refresco = null;
    foreach ($refrescos as $iRefresco) {
        if ($iRefresco["codigo"] === $codigo) {
            $refresco = $iRefresco;
            break;
        }
    }
    return $refresco;
}

function guardarEnSession($orden)
{
    $ordenes = [];
    if (isset($_SESSION["ordenes_concordia"])) {
        $ordenes = $_SESSION["ordenes_concordia"];
    }
    $ordenes[] = $orden;
    $_SESSION["ordenes_concordia"] = $ordenes;
}
