<?php


namespace App;


class Citadine extends Car
{
	public function __construct(string $name, Brand $brand, int $price, int $odometer, int $yearConstruction)
	{
		parent::__construct($name, $brand, $price, $odometer, $yearConstruction);
	}

}