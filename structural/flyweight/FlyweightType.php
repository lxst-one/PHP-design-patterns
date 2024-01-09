<?php

namespace DP\structural\flyweight;

readonly class FlyweightType
{
    public function __construct(
        private string $commonText,
        private int    $commonNumber
    ) {}

    public function print(string $mutableText): void
    {
        echo sprintf('%s %s %s', $this->commonText, $mutableText, $this->commonNumber);
    }
}