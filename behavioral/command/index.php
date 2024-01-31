<?php

namespace DP\behavioral\command;

require_once 'Command.php';
require_once 'ConcreteCommand1.php';
require_once 'ConcreteCommand2.php';
require_once 'EchoService.php';

//Business logic methods shouldn't be called directly but through command classes.
//These classes shouldn't accept any parameters and in most cases have only one method
//to handle operation
//If any parameters are needed in Command class it should be organized by this class itself
$command1 = new ConcreteCommand1();
$command2 = new ConcreteCommand2();

$command1->handle();
$command2->handle();