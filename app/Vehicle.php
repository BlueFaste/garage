<?php


namespace App;


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
	}

	abstract public function showPopularity(): String;

}