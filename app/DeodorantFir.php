<?php


namespace App;


class DeodorantFir implements Article
{
	protected string $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function getPrice(): float
	{
		return 5;
	}

	public function getName(): string
	{
		return $this->name;
	}

}