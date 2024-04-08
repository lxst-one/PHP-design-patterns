<?php

class ConcreteStrategy2 implements Strategy
{

    public function print(): void
    {
        printf("\nstrategy2");
    }
}