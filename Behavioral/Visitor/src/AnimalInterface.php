<?php 
namespace Visitor;

use Visitor\AnimalOperationInterface as AnimalOperation;

interface AnimalInterface
{
    public function accept(AnimalOperation $operation);
}