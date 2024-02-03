<?php

namespace DP\behavioral\mediator;

readonly class Component1
{

    public function __construct(
        private MediatorInterface $mediator
    ) {}

    public function click(): void
    {
        $this->mediator->show($this, 'Msg after click Component1');
    }
}