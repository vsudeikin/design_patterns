<?php

use Strategy\BubbleSortStrategy;
use Strategy\QuickSortStrategy;
use Strategy\Sorter;

require_once __DIR__ . "/../../vendor/autoload.php";

$dataset = [1, 5, 4, 3, 2, 8];

$sorter = new Sorter(new BubbleSortStrategy());
$sorter->sort($dataset); // Output : Пузырьковая сортировка

$sorter = new Sorter(new QuickSortStrategy());
$sorter->sort($dataset); // Output : Быстрая сортировка