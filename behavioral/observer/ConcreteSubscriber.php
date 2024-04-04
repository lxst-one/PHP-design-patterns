<?php

class ConcreteSubscriber implements Subscriber
{
    public function __construct(
        private int $field1
    )
    {

    }

    public function update(): void
    {
       $this->field1++;
    }

    public function getField1(): int
    {
        return $this->field1;
    }
}
