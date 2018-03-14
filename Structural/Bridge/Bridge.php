<?php

use Bridge\About;
use Bridge\Careers;
use Bridge\DarkTheme;
use Bridge\LightTheme;

require_once __DIR__ . "/../../vendor/autoload.php";

$darkTheme = new DarkTheme();
$lightTheme = new LightTheme();

$about = new About($darkTheme);
$careers = new Careers($lightTheme);

echo $about->getContent(); // "About page in Dark Black";
echo $careers->getContent(); // "Careers page in Dark Black";