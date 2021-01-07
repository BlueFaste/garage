<?php


namespace App;


interface Article
{
	public function getPrice(): float;

	public function getName(): string;

}