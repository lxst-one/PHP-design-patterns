<?php

namespace DP\behavioral\iterator;

class ConcreteIterator implements IteratorInterface
{
    private int $currentIndex = 0;

    public function __construct(
        private readonly ConcreteCollection $collection
    ) {}

    public function getNext(): mixed
    {
        if(!$this->hasMore()) {
            return null;
        }

        $element = $this->collection->getElements()[$this->currentIndex];
        $this->currentIndex++;

        return $element;
    }

    public function hasMore(): bool
    {
        $allElements = $this->collection->getElements();
        return $this->currentIndex !== count($allElements);
    }
}