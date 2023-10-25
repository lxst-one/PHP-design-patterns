<?php

require_once 'ClassBase.php';
require_once 'ClassA.php';
require_once 'ClassB.php';

$param = 'a';
//$param = 'b';

switch ($param) {
	case 'a':
	default:
		$class = new ClassA();
		break;
	
	case 'b':
		$class = new ClassB();
		break;
}

/** @var ClassBase */
echo $class->operation();