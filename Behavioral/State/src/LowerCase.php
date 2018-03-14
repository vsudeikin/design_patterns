<?php 

namespace State;

use State\WritingStateInterface as WritingState;

class LowerCase implements WritingState
{
    public function write($words)
    {
        echo strtolower($words) . PHP_EOL;
    }
}