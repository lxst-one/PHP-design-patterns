<?php

require_once 'ConcreteOriginator.php';
require_once 'ConcreteMemento.php';
require_once 'Caretaker.php';

$caretaker = new Caretaker();

$originator1 = new ConcreteOriginator(1, 1);
$originator2 = new ConcreteOriginator(2, 2);
$originator3 = new ConcreteOriginator(3, 3);

$caretaker->push($originator1->createSnapshot());
$caretaker->push($originator2->createSnapshot());
$caretaker->push($originator3->createSnapshot());

printf($caretaker->pop()->restore()->field2);
printf($caretaker->pop()->restore()->field2);
printf($caretaker->pop()->restore()->field2);
