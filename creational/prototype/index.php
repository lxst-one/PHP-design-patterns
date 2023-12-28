<?php

require_once 'ConcreteInterface.php';
require_once 'CloneInterface.php';
require_once 'Concrete1.php';
require_once 'Concrete2.php';

/** @var ConcreteInterface|CloneInterface $class */
$class = new Concrete1();

/** @var ConcreteInterface|CloneInterface $cloneClass */
// No need to call concrete class constructor, especially if you only know the interface of the class
$cloneClass = $class->clone();

$class->print();
$cloneClass->print();