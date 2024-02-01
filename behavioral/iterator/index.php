<?php

namespace DP\behavioral\iterator;

require_once 'CollectionInterface.php';
require_once 'IteratorInterface.php';
require_once 'ConcreteCollection.php';
require_once 'ConcreteIterator.php';

$messages = [
    'test', 'test2', 'test3'
];

//Custom iterator for collection example
$collection = new ConcreteCollection($messages);
$iterator = $collection->createIterator();

echo $iterator->hasMore();
echo $iterator->getNext() . ' - ' . $iterator->getNext() . ' - ' . $iterator->getNext();
echo $iterator->hasMore();