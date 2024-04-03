<?php

class ConcreteOriginator
{

    public function __construct(
        private int $field1,
        public int $field2
    ) {}

    public function createSnapshot(): ConcreteMemento
    {
        return new ConcreteMemento(
            $this->field1,
            $this->field2
        );
    }
}