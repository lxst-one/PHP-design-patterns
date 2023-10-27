<?php

require_once 'Formatter.php';

class NewLineFormat implements Formatter
{

    public function format(string $text): string
    {
        return $text.PHP_EOL;
    }
}