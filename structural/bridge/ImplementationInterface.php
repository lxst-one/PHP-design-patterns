<?php

interface ImplementationInterface
{
    public function setText(string $text): void;

    public function getText(): string;
}