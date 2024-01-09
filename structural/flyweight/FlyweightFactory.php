<?php

namespace DP\structural\flyweight;

class FlyweightFactory
{
    private array $flyweightTypes = [];

    public function getFlyweight(string $commonText, int $commonNumber): FlyweightType
    {
        if(!isset($this->flyweightTypes[$commonNumber])) {
            $this->flyweightTypes += [$commonNumber => new FlyweightType($commonText, $commonNumber)];
        }

        return $this->flyweightTypes[$commonNumber];
    }
}