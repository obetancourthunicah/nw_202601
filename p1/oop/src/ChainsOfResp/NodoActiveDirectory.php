<?php

namespace Nw\Oop\ChainsOfResp;

class NodoActiveDirectory extends ANodo
{

    public function Next(string $usuario, string $password): bool
    {
        if ($usuario === "active" && $password === "12345678") {
            echo "NodoActiveDirectory ";
            return true;
        }
        if (isset($this->next)) {
            return $this->next->Next($usuario, $password);
        }
        return false;
    }
}
