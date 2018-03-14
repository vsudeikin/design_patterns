<?php 
namespace State;

use State\WritingStateInterface as WritingState;

class UpperCase implements WritingState
{
    public function write($words)
    {
        echo strtoupper($words) . PHP_EOL;
    }
}