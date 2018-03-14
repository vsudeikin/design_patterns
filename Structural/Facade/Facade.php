<?php

use Facade\Computer;
use Facade\ComputerFacade;

require_once __DIR__ . "/../../vendor/autoload.php";

$computer = new ComputerFacade(new Computer());
$computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
echo "\n";
$computer->turnOff(); // Bup bup buzzz! Haah! Zzzzz
echo "\n";