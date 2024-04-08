<?php

class PrintVisitor implements Visitor
{

    public function visitTypeA(): void
    {
        printf('TypeA');
    }

    public function visitTypeB(): void
    {
        printf('TypeB');
    }
}