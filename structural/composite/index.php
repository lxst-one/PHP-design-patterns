<?php

require_once 'Component.php';
require_once 'Composite.php';
require_once 'Leaf.php';

$component = new Composite(
    [
        new Composite(
            [
                new Composite(
                    [new Leaf(), new Leaf()]
                )
            ]
        ),
        new Leaf()
    ]
);

$component->print();
//Output: Composite Composite Composite Leaf Leaf Leaf