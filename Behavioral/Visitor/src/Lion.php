<?php 
namespace Visitor;

use Visitor\AnimalInterface as Animal;
use Visitor\AnimalOperationInterface as AnimalOperation;

class Lion implements Animal
{
    public function roar()
    {
        echo 'Roaaar!' . PHP_EOL;
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitLion($this);
    }
}