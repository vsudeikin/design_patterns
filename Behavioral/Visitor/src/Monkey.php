<?php 
namespace Visitor;

use Visitor\AnimalInterface as Animal;
use Visitor\AnimalOperationInterface as AnimalOperation;

class Monkey implements Animal
{
    public function shout()
    {
        echo 'Ooh oo aa aa!' . PHP_EOL;
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitMonkey($this);
    }
}