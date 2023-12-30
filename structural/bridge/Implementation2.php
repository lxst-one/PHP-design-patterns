<?php

class Implementation2 implements ImplementationInterface
{
    private string $text;

    public function setText(string $text): void
    {
        $this->text = strtoupper($text);
    }

    public function getText(): string
    {
        return $this->text;
    }
}