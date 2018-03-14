<?php
use FactoryMethod\DevelopmentManager;
use FactoryMethod\MarketingManager;

require_once __DIR__ . "/../../vendor/autoload.php";

$devManager = new DevelopmentManager();

$devManager->takeInterview(); // Output: Спрашивает о шаблонах проектирования.

echo "\n";

$marketingManager = new MarketingManager();

$marketingManager->takeInterview(); // Output: Спрашивает о создании сообщества.

echo "\n";
