<?php

require_once 'InterfaceProduct.php';

class ClassProductA implements InterfaceProduct
{
	public function operation(): string
	{
		return 'ClassProductA';
	}
}