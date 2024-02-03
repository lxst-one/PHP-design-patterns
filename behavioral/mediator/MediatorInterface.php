<?php

namespace DP\behavioral\mediator;

interface MediatorInterface
{
    public function show(mixed $component, string $msg): void;
}