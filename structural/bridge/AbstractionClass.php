<?php

class AbstractionClass
{
    private ImplementationInterface $implementation;

    public function __construct(ImplementationInterface $implementation)
    {
        $this->implementation = $implementation;
    }

    public function print(string $text): void
    {
        $this->implementation->setText($text);
        echo $this->implementation->getText();
    }
}