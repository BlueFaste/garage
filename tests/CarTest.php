<?php

namespace Tests;

use App\Brand;
use App\Car;
use App\Citadine;

class CarTest extends TestCase
{
	/** @test */
	public function can_have_car_name()
	{
		$peugeot = new Brand('Peugeot');
		$peugeot205 = new Citadine('205', $peugeot, 15000, 2, 2020);

		$this->assertEquals('Peugeot 205', $peugeot205->getName());
	}

	/** @test */
	public function can_have_car_price()
	{
		$peugeot = new Brand('Peugeot');
		$peugeot205 = new Citadine('205', $peugeot, 15000, 2, 2020);

		$this->assertEquals(3.7128712871287, $peugeot205->getPrice());
	}

	/** @test */
	public function car_have_good_popularity()
	{
		$peugeot = new Brand('Peugeot');
		$peugeot205 = new Citadine('205', $peugeot, 15000, 2, 2020);

		$this->assertEquals('Popularité bonne', $peugeot205->showPopularity());
	}

	/** @test */
public function can_have_car_wear()
{
	$peugeot = new Brand('Peugeot');
	$peugeot205 = new Citadine('205', $peugeot, 15000, 2, 2020);

	$this->assertEquals(4040, $peugeot205->getWear());
}

}
