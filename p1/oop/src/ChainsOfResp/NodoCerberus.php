<?php

namespace Nw\Oop\ChainsOfResp;

class NodoCerberus extends ANodo
{

    public function Next(string $usuario, string $password): bool
    {
        if ($usuario === "cerberus" && $password == "ABCNDMD") {
            echo "NodoCerberus ";
            return true;
        }
        if (isset($this->next)) {
            return $this->next->Next($usuario, $password);
        }
        return false;
    }
}
