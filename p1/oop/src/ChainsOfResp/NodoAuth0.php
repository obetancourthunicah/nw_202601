<?php

namespace Nw\Oop\ChainsOfResp;

class NodoAuth0 extends ANodo
{

    public function Next(string $usuario, string $password): bool
    {
        if ($usuario === "auth" && $password == "00000000") {
            echo "NodoAuth0 ";
            return true;
        }
        if (isset($this->next)) {
            return $this->next->Next($usuario, $password);
        }
        return false;
    }
}
