<?php

namespace Nw\Oop\Ordenes;

use Nw\Oop\Productos\Producto;

class Orden
{
    private float $total;
    private array $productos;
    private string $nombre;
    private string $correo;

    public function __construct(string $nombre, string $correo)
    {
        $this->total = 0;
        $this->productos = [];
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function addProducto(Producto $producto): int
    {
        $this->productos[] = $producto;
        $cantidadProducto = count($this->productos);
        $total = 0;
        foreach ($this->productos as $prod) {
            $total += $producto->getPrecio();
        }
        $this->total = $total;
        return $cantidadProducto;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function toString(): string
    {
        $strBuffer =  "Orden \n ";
        $strBuffer .= "Productos \n";
        $linea = 1;
        foreach ($this->productos as $prod) {
            $strBuffer .= $linea . " " . $prod->getSku() . " " . $prod->getName() . " " . $prod->getPrecio() . "\n";
        }
        $strBuffer .= "==================================\n";
        $strBuffer .= "Total " . $this->total;

        return $strBuffer;
    }
}
