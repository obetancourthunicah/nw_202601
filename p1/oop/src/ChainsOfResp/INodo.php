<?php

namespace Nw\Oop\ChainsOfResp;

interface INodo
{
    public function AddNode(INodo $node): void;
    public function Next(string $usuario, string $password): bool;
}
