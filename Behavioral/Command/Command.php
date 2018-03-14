<?php

use Command\Bulb;
use Command\RemoteControl;
use Command\TurnOff;
use Command\TurnOn;
require_once __DIR__ . "/../../vendor/autoload.php";

$bulb = new Bulb();

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$remote = new RemoteControl();
$remote->submit($turnOn); // Лампочка зажглась!
echo "\n";
$remote->submit($turnOff); // Темнота!
echo "\n";