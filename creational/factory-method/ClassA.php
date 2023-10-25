<?php

require_once 'InterfaceProduct.php';
require_once 'ClassProductA.php';

class ClassA extends ClassBase
{
	public function factoryMethod(): InterfaceProduct
	{
		return new ClassProductA();
	}
}