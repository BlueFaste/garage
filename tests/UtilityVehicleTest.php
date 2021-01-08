<?php


namespace Tests;


use App\Brand;
use App\UtilityVehicle;

class UtilityVehicleTest extends TestCase
{
	/** @test */
	public function can_have_utility_vehicle_name()
	{
		$renaud = new Brand('Renaud');
		$utility = new UtilityVehicle('utilitaire', $renaud, 2000, 12, 2000);
		$this->assertEquals('Renaud utilitaire', $utility->getName());
	}

	/** @test */
	public function can_have_utility_vehicle_price()
	{
		$renaud = new Brand('Renaud');
		$utility = new UtilityVehicle('utilitaire', $renaud, 2000, 12, 2000);
		$this->assertEquals(2120.0, $utility->getPrice());
	}

	/** @test */
	public function utility_vehicle_have_good_popularity()
	{
		$renaud = new Brand('Renaud');
		$utility = new UtilityVehicle('utilitaire', $renaud, 2000, 12, 2000);
		$this->assertEquals('Popularité bonne', $utility->showPopularity());
	}

	/** @test */
	public function utility_vehicle_have_bad_popularity()
	{
		$renaud = new Brand('Renaud');
		$utility = new UtilityVehicle('utilitaire', $renaud, 2000, 10, 2000);
		$this->assertEquals('Popularité mauvaise', $utility->showPopularity());
	}
}