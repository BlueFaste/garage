<?php


namespace App;


class Brand
{
	public string $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}
}