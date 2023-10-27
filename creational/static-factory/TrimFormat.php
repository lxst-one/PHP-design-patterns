<?php

require_once 'Formatter.php';

class TrimFormat implements Formatter
{
    public function format(string $text): string
    {
        return trim($text);
    }
}