<?php 
namespace Strategy;

use Strategy\SortStrategyInterface as SortStrategy;

class QuickSortStrategy implements SortStrategy
{
    public function sort(array $dataset)
    {
        echo "Sorting using quick sort" . PHP_EOL;

        // Do sorting
        return $dataset;
    }
}