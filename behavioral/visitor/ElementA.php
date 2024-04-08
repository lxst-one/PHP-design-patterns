<?php

class ElementA implements Element
{

    public function accept(Visitor $visitor): void
    {
        $visitor->visitTypeA();
    }
}