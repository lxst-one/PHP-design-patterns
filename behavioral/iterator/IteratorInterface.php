<?php

namespace DP\behavioral\iterator;

interface IteratorInterface
{
    public function getNext(): mixed;

    public function hasMore(): bool;
}