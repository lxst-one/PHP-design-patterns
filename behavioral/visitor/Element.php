<?php

interface Element
{
    //... some stuff

    public function accept(Visitor $visitor): void;
}
