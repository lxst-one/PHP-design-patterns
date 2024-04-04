<?php

class ConcreteStateA extends State
{

    public function update()
    {
        echo 'update stateA';
        $this->context->transitionTo(new ConcreteStateB());
    }

    public function create()
    {
        echo 'create stateA';
    }
}