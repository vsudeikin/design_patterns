<?php 
namespace Visitor;
use Visitor\AnimalInterface as Animal;
use Visitor\AnimalOperationInterface as AnimalOperation;

class Dolphin implements Animal
{
    public function speak()
    {
        echo 'Tuut tuttu tuutt!' . PHP_EOL;
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitDolphin($this);
    }
}