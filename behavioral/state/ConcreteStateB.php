<?php

class ConcreteStateB extends State
{

    public function update()
    {
        echo 'update stateB';
    }

    public function create()
    {
        echo 'create stateB';
    }
}