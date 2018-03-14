<?php

use Singleton\President;
require_once __DIR__ . "/../../vendor/autoload.php";

$president1 = President::getInstance();
$president2 = President::getInstance();

var_dump($president1 === $president2); // true