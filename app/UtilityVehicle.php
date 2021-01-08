<?php


namespace App;


class UtilityVehicle extends Vehicle implements Article
{
	protected int $volume;
	protected int $odometer;

	public function __construct(string $name, Brand $brand, int $price, int $volume, int $odometer)
	{
		parent::__construct($name, $brand, $price);
		$this->volume = $volume;
		$this->odometer = $odometer;
	}

	public function showPopularity(): string
	{
		if ($this->volume > 11) {
			return 'Popularité bonne';
		} else {
			return 'Popularité mauvaise';
		}
	}

	public function getPrice(): float
	{
		return $this->price + $this->volume * 10;
	}

	public function getName(): string
	{
		return $this->brand->name . ' ' . $this->name;
	}

}