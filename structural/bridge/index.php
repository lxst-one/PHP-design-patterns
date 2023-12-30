<?php

require_once 'ImplementationInterface.php';
require_once 'AbstractionClass.php';
require_once 'Implementation1.php';
require_once 'Implementation2.php';

$interface1 = new AbstractionClass(new Implementation1());
$interface2 = new AbstractionClass(new Implementation2());

$interface1->print('test');
$interface2->print('test');