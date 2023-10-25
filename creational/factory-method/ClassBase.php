<?php

require_once 'InterfaceProduct.php';

abstract class ClassBase
{
	abstract public function factoryMethod(): InterfaceProduct;

	public function operation(): string
	{
		/** @var InterfaceProduct */
		$classProduct = $this->factoryMethod();
		
		return $classProduct->operation();
	}
}