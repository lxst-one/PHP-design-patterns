<?php

namespace DP\structural\flyweight;

readonly class Flyweight
{
    public function __construct(
        private string $mutableText,
        private FlyweightType $flyweightType
    ) {}

    public function print(): void
    {
        $this->flyweightType->print($this->mutableText);
    }
}