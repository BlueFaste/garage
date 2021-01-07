<?php

namespace App;

class Car extends Vehicle implements Article
{
	protected int $odometer;
	protected int $yearConstruction;

	public function __construct(string $name, Brand $brand, int $price, int $odometer, int $yearConstruction)
	{
		parent::__construct($name, $brand, $price);
		$this->odometer = $odometer;
		$this->yearConstruction = $yearConstruction;
	}

	public function getWear(): int
	{
		return $this->odometer * $this->yearConstruction;
	}

	public function showPopularity(): string
	{
		if ($this->yearConstruction > 2010){
			return 'Popularité bonne';
		} else {
			return 'Popularité mauvaise';
		}
	}

	public function getPrice(): float
	{
		return $this->price / $this->getWear();
	}

	public function getName(): string
	{
		return $this->brand->name.' '.$this->name;
	}

}
