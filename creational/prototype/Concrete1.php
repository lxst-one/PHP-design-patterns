<?php

class Concrete1 implements ConcreteInterface, CloneInterface
{
    public function print(): void
    {
        echo 'Concrete1';
    }

    public function clone(): self
    {
        return new Concrete1();
    }
}