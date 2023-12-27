<?php

class BuilderConcrete2 implements Builder
{
    private Product2 $product2;

    public function __construct()
    {
        $this->product2 = new Product2();
    }

    public function buildBackend(int $number): self
    {
        $this->product2->setNumber($number);
        return $this;
    }

    public function buildFront(string $text): self
    {
        $this->product2->setText($text);
        return $this;
    }

    public function getResult(): Product2
    {
        return $this->product2;
    }
}