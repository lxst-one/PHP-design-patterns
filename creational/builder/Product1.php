<?php

class Product1
{
    private int $number;
    private string $text;

    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function getTitle(): string
    {
        return $this->text . $this->number;
    }
}