<?php

namespace App;

require __DIR__ . '/../vendor/autoload.php';
$peugeot = new Brand('Peugeot');
$peugeot205 = new Citadine('205', $peugeot, 15000, 2, 2020);

$renaud = new Brand('Renaud');
$utility = new UtilityVehicle('utilitaire', $renaud, 2000, 12, 2000);

$fir = new DeodorantFir('Sapin déo');

var_dump($peugeot205->getWear());
//var_dump($utility->getName());
//var_dump($fir->getPrice());
var_dump($peugeot205->getPrice() + $utility->getPrice() + $fir->getPrice());
$listeAchat = [$peugeot205, $utility, $fir];
$panier = new Cart($listeAchat);
var_dump($panier->getInvoice());




//dump($car);

//// Format attendu de la facture du panier
//
//$facture = [
//    "Peugoet 205, Sapin Fraicheur océan", // voir => https://www.php.net/manual/en/function.implode
//    505,
//];
