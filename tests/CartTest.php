<?php


namespace Tests;


use App\Brand;
use App\Cart;
use App\Citadine;
use App\DeodorantFir;
use App\UtilityVehicle;

class CartTest extends TestCase
{
	/** @test */
	public function can_have_invoice_array()
	{
		$peugeot = new Brand('Peugeot');
		$peugeot205 = new Citadine('205', $peugeot, 15000, 2, 2020);
		$renaud = new Brand('Renaud');
		$utility = new UtilityVehicle('utilitaire', $renaud, 2000, 12, 2000);
		$fir = new DeodorantFir('Sapin déo');

		$listeAchat = [$peugeot205, $utility, $fir];
		$panier = new Cart($listeAchat);

		$this->assertEquals(['Peugeot 205, Renaud utilitaire, Sapin déo', 2128.7128712871286], $panier->getInvoice());
	}

	/** @test */
	public function can_have_invoice_exception()
	{
		$this->expectExceptionMessage('Vous ne pouvez mettre dans le panier que des objets du garage.');
		$listeAchat = [1];
		$panier = new Cart($listeAchat);

	}

}