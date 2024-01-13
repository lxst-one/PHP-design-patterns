<?php

namespace DP\structural\proxy;

class ApiLib
{
    private string $text = 'ApiClassData';

    public function getText(): string
    {
        sleep(3);
        return $this->text;
    }
}