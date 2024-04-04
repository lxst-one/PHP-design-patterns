<?php

require_once 'State.php';
require_once 'ConcreteStateA.php';
require_once 'ConcreteStateB.php';
require_once 'Context.php';

$context = new Context(new ConcreteStateA());
$context->update();
$context->create();
