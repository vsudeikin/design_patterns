<?php
use AbstractFactory\IronDoorFactory;
use AbstractFactory\WoodenDoorFactory;

require_once __DIR__ . "/../../vendor/autoload.php";

function newline()
{
    echo "\n";
}

$woodenFactory = new WoodenDoorFactory();

$door = $woodenFactory->makeDoor();
$expert = $woodenFactory->makeFittingExpert();

$door->getDescription();  // Output: Я деревянная дверь
newline();
$expert->getDescription(); // Output: Я могу устанавливать только деревянные двери
newline();
// Same for Iron Factory
$ironFactory = new IronDoorFactory();

$door = $ironFactory->makeDoor();
$expert = $ironFactory->makeFittingExpert();

$door->getDescription();  // Output: Я стальная дверь
newline();
$expert->getDescription(); // Output: Я могу устанавливать только стальные двери
newline();