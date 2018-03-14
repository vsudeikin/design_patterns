<?php
use Visitor\Dolphin;
use Visitor\Lion;
use Visitor\Monkey;
use Visitor\Speak;

require_once __DIR__ . "/../../vendor/autoload.php";

$monkey = new Monkey();
$lion = new Lion();
$dolphin = new Dolphin();

$speak = new Speak();

$monkey->accept($speak);    // Уа-уа-уааааа!    
$lion->accept($speak);      // Ррррррррр!
$dolphin->accept($speak);   // Туут тутт туутт!