<?php

require_once 'Strategy.php';
require_once 'Context.php';
require_once 'ConcreteStrategy1.php';
require_once 'ConcreteStrategy2.php';

$context = new Context(new ConcreteStrategy1());

$case = 'test2';
switch ($case) {
    case 'test2':
        $context->setStrategy(new ConcreteStrategy2());
        break;
    default:
    case 'test':
        $context->setStrategy(new ConcreteStrategy1());
        break;
}

$context->execute();