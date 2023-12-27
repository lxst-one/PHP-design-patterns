<?php

interface Builder
{
    public function buildBackend(int $number);
    public function buildFront(string $text);

    public function getResult(): mixed;
}