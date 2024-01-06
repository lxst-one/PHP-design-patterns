<?php

namespace DP\structural\decorator;

require_once 'Component.php';
require_once 'BaseDecorator.php';
require_once 'ConcreteComponent.php';
require_once 'DecoratorA.php';
require_once 'DecoratorB.php';

//Classic
$component = new ConcreteComponent();
$component->print();
//Output: Component



//With decorators
$component = new DecoratorA($component);
$component->print();
//Output: Component DecoratorA

$component = new DecoratorB($component);
$component->print();
//Output: Component DecoratorA DecoratorB