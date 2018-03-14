<?php
use Prototype\Sheep;
require_once __DIR__ . "/../../vendor/autoload.php";

$original = new Sheep('Jolly');

echo $original->getName() . "\n"; // Джолли

echo $original->getCategory() . "\n"; // Горная овечка

// Клонируйте и модифицируйте, что нужно
$cloned = clone $original;

//Также для модификации процедуры клонирования можно обратиться к магическому методу __clone.
//$cloned->setName('Dolly');

echo $cloned->getName() . "\n"; // Долли

echo $cloned->getCategory(). "\n"; // Горная овечка