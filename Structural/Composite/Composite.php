<?php

use Composite\Designer;
use Composite\Developer;
use Composite\Organization;

require_once __DIR__ . "/../../vendor/autoload.php";

// Подготовка сотрудников
$john = new Developer('John Doe', 12000);
$jane = new Designer('Jane Doe', 15000);

// Включение их в штат
$organization = new Organization();
$organization->addEmployee($john);
$organization->addEmployee($jane);

echo "Net salaries: " . $organization->getNetSalaries() . "\n"; // Net Salaries: 27000