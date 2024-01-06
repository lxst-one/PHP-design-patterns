<?php

namespace DP\structural\decorator;

use DP\structural\decorator\Component as Component;

class ConcreteComponent implements Component
{
    public function print(): void
    {
        echo "Component\n";
    }
}