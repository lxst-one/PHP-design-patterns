<?php

namespace DP\structural\decorator;

use DP\structural\decorator\Component as Component;

abstract readonly class BaseDecorator implements Component
{
    public function __construct(
        protected Component $component
    ) {}

    public function print(): void
    {
        $this->component->print();
    }
}