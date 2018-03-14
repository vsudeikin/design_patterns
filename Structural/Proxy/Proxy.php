<?php

use Proxy\LabDoor;
use Proxy\Security;

require_once __DIR__ . "/../../vendor/autoload.php";

$door = new Security(new LabDoor());
$door->open('invalid'); // Big no! It ain't possible.
echo "\n";
$door->open('$ecr@t'); // Opening lab door
echo "\n";
$door->close(); // Closing lab door
echo "\n";