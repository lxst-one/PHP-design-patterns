<?php

require_once 'ClassA.php';

$classA = ClassA::getInstance();
$sameInstance = ClassA::getInstance();

// 'Created' message in constructor displyed only once

// $cloneExample = clone $classA; //Throws exception