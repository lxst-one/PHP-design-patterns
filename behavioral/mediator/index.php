<?php

namespace DP\behavioral\mediator;

require_once 'MediatorInterface.php';
require_once 'Mediator.php';
require_once 'Component1.php';
require_once 'Component2.php';

$mediator = new Mediator();
$component1 = new Component1($mediator);
$component2 = new Component2($mediator);

$component1->click();
$component2->click();