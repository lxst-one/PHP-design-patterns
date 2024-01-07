<?php

namespace DP\structural\facade;

readonly class ProcessText
{
    public function __construct(
        private string $text
    ) {}

    public function processText(): string
    {
        return strtoupper($this->text);
    }
}