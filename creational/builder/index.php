<?php

require_once 'Builder.php';
require_once 'BuilderConcrete1.php';
require_once 'BuilderConcrete2.php';
require_once 'Product1.php';
require_once 'Product2.php';

$builder = new BuilderConcrete1();
$product1 = $builder
    ->buildFront('Builder')
    ->buildBackend(1)
    ->getResult();

$builder = new BuilderConcrete2();
$product2 = $builder
    ->buildFront('Builder')
    ->buildBackend(2)
    ->getResult();

print($product1->getTitle() . ' ' . $product2->getTitle());
