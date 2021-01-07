<?php


namespace App;


use PHPUnit\Util\Exception;

class Cart
{
	public array $articles;

	public function __construct(array $articles)
	{
		$this->articles = $articles;
		foreach ($articles as $article){
			if (!$article instanceof Article){
				throw new Exception('Vous ne pouvez mettre dans le panier que des objets du garage.');
			}
		}
	}

	public function getInvoice(): array
	{
		$totalPrice = 0;
		$totalArticles= '';
		foreach ($this->articles as $article){
			$totalPrice += $article->getPrice();
			$totalArticles = $totalArticles.', '.$article->getName();
		}
		return [$totalArticles, $totalPrice];
	}
}