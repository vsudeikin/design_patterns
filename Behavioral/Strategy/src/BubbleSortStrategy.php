<?php
namespace Strategy;
use Strategy\SortStrategyInterface as SortStrategy;

class BubbleSortStrategy implements SortStrategy
{
    public function sort(array $dataset)
    {
        echo "Sorting using bubble sort"  . PHP_EOL;

        // Do sorting
        return $dataset;
    }
}
