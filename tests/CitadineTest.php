<?php


namespace Tests;


use App\Brand;
use App\Citadine;

class CitadineTest extends TestCase
{
	/** @test */
	public function can_have_citadine_name()
	{
		$peugeot = new Brand('Peugeot');
		$peugeot205 = new Citadine('205', $peugeot, 15000, 2, 2020);

		$this->assertEquals('Peugeot 205', $peugeot205->getName());
	}

	/** @test */
	public function can_have_citadine_price()
	{
		$peugeot = new Brand('Peugeot');
		$peugeot205 = new Citadine('205', $peugeot, 15000, 2, 2020);

		$this->assertEquals(3.7128712871287, $peugeot205->getPrice());
	}

	/** @test */
	public function citadine_have_good_popularity()
	{
		$peugeot = new Brand('Peugeot');
		$peugeot205 = new Citadine('205', $peugeot, 15000, 2, 2020);

		$this->assertEquals('Popularité bonne', $peugeot205->showPopularity());
	}

	/** @test */
	public function citadine_have_bad_popularity()
	{
		$peugeot = new Brand('Peugeot');
		$peugeot205 = new Citadine('205', $peugeot, 15000, 2, 2005);

		$this->assertEquals('Popularité mauvaise', $peugeot205->showPopularity());
	}

	/** @test */
	public function can_have_citadine_wear()
	{
		$peugeot = new Brand('Peugeot');
		$peugeot205 = new Citadine('205', $peugeot, 15000, 2, 2020);

		$this->assertEquals(4040, $peugeot205->getWear());
	}

}