<?php


namespace App;


use PHPUnit\Util\Exception;

abstract class Vehicle
{
	protected string $name;
	protected Brand $brand;
	protected int $price;

	public function __construct(string $name, Brand $brand, int $price)
	{
		$this->name = $name;
		$this->brand = $brand;
		$this->price = $price;

		if (!$brand instanceof Brand) {
			throw new Exception("La marque du véhicule ne peut être qu'un objet Brand");
		}
	}

	abstract public function showPopularity(): string;

}