<?php

use Mediator\ChatRoom;
use Mediator\User;
require_once __DIR__ . "/../../vendor/autoload.php";

$mediator = new ChatRoom();

$john = new User('John Doe', $mediator);
$jane = new User('Jane Doe', $mediator);

$john->send('Hi there!');
$jane->send('Hey!');

// Выходной вид
// Feb 14, 10:58 [John]: Hi there!
// Feb 14, 10:58 [Jane]: Hey!