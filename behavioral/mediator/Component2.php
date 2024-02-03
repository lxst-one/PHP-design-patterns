<?php

namespace DP\behavioral\mediator;

readonly class Component2
{

    public function __construct(
        private MediatorInterface $mediator
    ) {}

    public function click(): void
    {
        $this->mediator->show($this, 'Msg after click Component2');
    }
}