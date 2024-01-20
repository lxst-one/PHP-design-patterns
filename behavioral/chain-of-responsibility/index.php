<?php

require_once 'Handler.php';
require_once 'BaseHandler.php';
require_once 'ConcreteHandler1.php';
require_once 'ConcreteHandler2.php';

$h1 = new ConcreteHandler1();
$h2 = new ConcreteHandler2();

$h1->setNext($h2);
$h1->handle(['value' => 'test']);