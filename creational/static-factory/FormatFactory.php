<?php

require_once 'Formatter.php';
require_once 'NewLineFormat.php';
require_once 'TrimFormat.php';

class FormatFactory
{
    public static function create(string $type): Formatter
    {
        return match($type) {
            'new-line'  => new NewLineFormat(),
            'trim'      => new TrimFormat()
        };
    }
}