<?php

require_once 'InterfaceProduct.php';

class ClassProductB implements InterfaceProduct
{
	public function operation(): string
	{
		return 'ClassProductB';
	}
}