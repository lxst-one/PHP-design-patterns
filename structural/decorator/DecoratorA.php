<?php

namespace DP\structural\decorator;

readonly class DecoratorA extends BaseDecorator
{
    public function print(): void
    {
        $this->component->print();
        $this->extraPrint();
    }

    public function extraPrint(): void
    {
        echo "DecoratorA\n";
    }
}