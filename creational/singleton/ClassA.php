<?php

class ClassA
{
	private static ?ClassA $instance = null;

	private function __construct() 
	{
		echo 'Created';
	}

	public static function getInstance()
	{
		if(!self::$instance) {
			self::$instance = new ClassA();
		}

		return self::$instance;
	}

	public function __clone() 
	{
		throw new \Exception("Cannot clone singleton object");
	}

	public function __wakeup() 
	{
		throw new \Exception("Cannot unserialize singleton object");
	}
}