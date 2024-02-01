<?php

namespace DP\behavioral\iterator;

interface CollectionInterface
{
    public function createIterator(): IteratorInterface;

    public function getElements(): array;
}