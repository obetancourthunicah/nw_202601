<?php

namespace Nw\Oop\ChainsOfResp;

abstract class ANodo implements INodo
{
    protected INodo $next;

    public function AddNode(INodo $node): void
    {
        $this->next = $node;
    }
}
