<?php

namespace Nw\Oop\Productos;

class Producto
{
    private string $sku;
    private string $nombre;
    private float $precio;

    public function __construct(string $sku, string $nombre, float $precio)
    {
        $this->sku = $sku;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function toArray()
    {
        return [
            "sku" => $this->sku,
            "nombre" => $this->nombre,
            "precio" => $this->precio
        ];
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }
    public function getSku(): string
    {
        return $this->sku;
    }
    public function getName(): string
    {
        return $this->nombre;
    }
}
