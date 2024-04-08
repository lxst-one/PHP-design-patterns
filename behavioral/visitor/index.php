<?php

require_once 'Element.php';
require_once 'Visitor.php';
require_once 'ElementA.php';
require_once 'ElementB.php';
require_once 'PrintVisitor.php';

/** @var Element[] $elements */
$elements = [
    new ElementA(),
    new ElementB()
];


$visitor = new PrintVisitor();
foreach ($elements as $element) {
    $element->accept($visitor);
}