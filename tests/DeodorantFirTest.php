<?php


namespace Tests;

use App\DeodorantFir;


class DeodorantFirTest extends TestCase
{
	/** @test */
	public function can_have_deodorat_fir_name()
	{
		$fir= new DeodorantFir('Sapin déo');
		$this->assertEquals('Sapin déo', $fir->getName());
	}

	/** @test */
	public function can_have_deodorat_fir_price()
	{
		$fir= new DeodorantFir('Sapin déo');
		$this->assertEquals(5, $fir->getPrice());
	}

}