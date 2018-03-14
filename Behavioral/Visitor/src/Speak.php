<?php 
namespace Visitor;

use Visitor\AnimalOperationInterface as AnimalOperation;
use Visitor\Dolphin;
use Visitor\Lion;
use Visitor\Monkey;

class Speak implements AnimalOperation
{
    public function visitMonkey(Monkey $monkey)
    {
        $monkey->shout();
    }

    public function visitLion(Lion $lion)
    {
        $lion->roar();
    }

    public function visitDolphin(Dolphin $dolphin)
    {
        $dolphin->speak();
    }
}