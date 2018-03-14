<?php
use SimpleFactory\DoorFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$door = DoorFactory::makeDoor(100, 200);

echo 'Width: ' . $door->getWidth();

echo "\n";

echo 'Height: ' . $door->getHeight();

echo "\n";