<?php

namespace DP\behavioral\iterator;

class ConcreteCollection implements CollectionInterface
{

    public function __construct(
        private array $elements
    ) {}

    public function createIterator(): IteratorInterface
    {
        return new ConcreteIterator($this);
    }

    public function getElements(): array
    {
        return $this->elements;
    }
}