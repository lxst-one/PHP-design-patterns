<?php

class BuilderConcrete1 implements Builder
{
    private Product1 $product1;

    public function __construct()
    {
        $this->product1 = new Product1();
    }

    public function buildBackend(int $number): self
    {
        $this->product1->setNumber($number);
        return $this;
    }

    public function buildFront(string $text): self
    {
        $this->product1->setText($text);
        return $this;
    }

    public function getResult(): Product1
    {
        return $this->product1;
    }
}