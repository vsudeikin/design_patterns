<?php

use Decorator\MilkCoffee;
use Decorator\SimpleCoffee;
use Decorator\WhipCoffee;
use Decorator\VanillaCoffee;

require_once __DIR__ . "/../../vendor/autoload.php";

$someCoffee = new SimpleCoffee();
echo $someCoffee->getCost() . ": "; // 10
echo $someCoffee->getDescription() . "\n"; // Simple Coffee

$milkCoffee = new MilkCoffee($someCoffee);
echo $milkCoffee->getCost() . ": "; // 12
echo $milkCoffee->getDescription() . "\n"; // Simple Coffee, milk

$whipCoffee = new WhipCoffee($milkCoffee);
echo $whipCoffee->getCost() . ": "; // 17
echo $whipCoffee->getDescription() . "\n"; // Simple Coffee, milk, whip

$vanillaCoffee = new VanillaCoffee($whipCoffee);
echo $vanillaCoffee->getCost() . ": "; // 20
echo $vanillaCoffee->getDescription() . "\n"; // Simple Coffee, milk, whip, vanilla
