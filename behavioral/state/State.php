<?php

abstract class State
{
    protected Context $context;

    public function setContext(Context $context): void
    {
        $this->context = $context;
    }

    abstract public function update();
    abstract public function create();
}
