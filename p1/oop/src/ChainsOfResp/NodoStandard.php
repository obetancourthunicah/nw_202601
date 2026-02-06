<?php

namespace Nw\Oop\ChainsOfResp;

class NodoStandard implements INodo
{
    private INodo $next;

    public function AddNode(INodo $node): void
    {
        $this->next = $node;
    }

    public function Next(string $usuario, string $password): bool
    {
        // validacion de la credencial
        // si es valido return true;

        if (isset($this->next)) {
            return $this->next->Next($usuario, $password);
        }
        return false;
    }
}
