<?php

namespace DP\structural\flyweight;

require_once 'FlyweightType.php';
require_once 'Flyweight.php';
require_once 'FlyweightFactory.php';

$numberOfFlyweightTypes = 10;
$numberOfFlyweightObjects = 100000;
$factory = new FlyweightFactory();
$flyweightObjects = [];

for($i=0; $i<$numberOfFlyweightObjects; $i++) {
    $randomInt = rand(0, $numberOfFlyweightTypes);
    $flyweightObjects[] = new Flyweight(
        'FlyweightMutable',
        $factory->getFlyweight('FlyweightCommon', $randomInt)
    );
}

// FlyweightType weights 192 bytes
// Flyweight (mutable object) weights 189 bytes
// Creating 10 common FlyweightType objects cost 1920 bytes
// When we create 100 000 Flyweight objects we use around 189 * 100 000 + 1920 = 18 901 920 bytes (18MB)
// Instead of 381 * 100 000 = 38 100 000 bytes (38MB)
echo mb_strlen(serialize($flyweightObjects), '8bit'); //~18-19 MB