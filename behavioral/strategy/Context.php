<?php

class Context
{
    public function __construct(
        private Strategy $strategy
    ) {}

    public function setStrategy(Strategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function execute(): void
    {
        $this->strategy->print();
    }
}