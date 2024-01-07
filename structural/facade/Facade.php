<?php

namespace DP\structural\facade;

class Facade
{
    public function print(): void
    {
        $file = new File();
        $text = $file->read();
        echo (new ProcessText($text))->processText();
    }
}