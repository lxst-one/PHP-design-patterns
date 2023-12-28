<?php

class Concrete2 implements ConcreteInterface, CloneInterface
{
    public function print(): void
    {
        echo 'Concrete2';
    }

    public function clone(): self
    {
        return new Concrete2();
    }
}