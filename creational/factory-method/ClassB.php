<?php

require_once 'InterfaceProduct.php';
require_once 'ClassProductB.php';

class ClassB extends ClassBase
{
	public function factoryMethod(): InterfaceProduct
	{
		return new ClassProductB();
	}
}