<?php

require_once 'FormatFactory.php';

$formatter = FormatFactory::create('new-line');
echo $formatter->format('test');