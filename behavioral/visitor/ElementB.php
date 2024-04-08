<?php

class ElementB implements Element
{

    public function accept(Visitor $visitor): void
    {
        $visitor->visitTypeB();
    }
}