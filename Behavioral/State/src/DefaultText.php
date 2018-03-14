<?php 
namespace State;

use State\WritingStateInterface as WritingState;

class DefaultText implements WritingState
{
    public function write($words)
    {
        echo $words . PHP_EOL;
    }
}