<?php

require_once 'Base.php';
require_once 'ConcreteExample1.php';
require_once 'ConcreteExample2.php';

/**
 * @var Base $example1
 * @var Base $example2
 */
$example1 = new ConcreteExample1();
$example2 = new ConcreteExample2();

$example1->print();
$example2->print();
