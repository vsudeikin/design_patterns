<?php

use Adapter\AsianLion;
use Adapter\Hunter;
use Adapter\WildDog;
use Adapter\WildDogAdapter;


require_once __DIR__ . "/../../vendor/autoload.php";

$wildDog = new WildDog();
$wildDogAdapter = new WildDogAdapter($wildDog);

$hunter = new Hunter();
$hunter->hunt($wildDogAdapter);

$lion = new AsianLion();
$hunter->hunt($lion);