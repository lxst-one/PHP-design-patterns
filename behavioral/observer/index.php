<?php

require_once 'Subscriber.php';
require_once 'ConcreteSubscriber.php';
require_once 'Publisher.php';

$subscriber = new ConcreteSubscriber(1);
$publisher = new Publisher([]);

$publisher->subscribe($subscriber);
$publisher->notifySubscribers();

echo $subscriber->getField1();