<?php

readonly class Composite implements Component
{
    /**
     * @param array<Component> $children
     */
    public function __construct(
        private array $children = []
    ) {}

    public function print(): void
    {
        echo "Composite\n";
        foreach ($this->children as $child) {
            $child->print();
        }
    }
}