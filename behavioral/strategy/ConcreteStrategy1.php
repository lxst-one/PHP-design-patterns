<?php

class ConcreteStrategy1 implements Strategy
{

    public function print(): void
    {
        printf("\nstrategy1");
    }
}