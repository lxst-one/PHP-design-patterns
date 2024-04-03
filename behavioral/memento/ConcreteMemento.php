<?php

class ConcreteMemento
{
    public function __construct(
        private int $field1,
        private int $field2
    ) {}

    public function restore(): ConcreteOriginator
    {
        return new ConcreteOriginator(
            $this->field1,
            $this->field2
        );
    }
}