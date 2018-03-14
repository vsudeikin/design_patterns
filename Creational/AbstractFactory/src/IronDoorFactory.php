<?php 
namespace AbstractFactory;

use AbstractFactory\DoorFactoryInterface as DoorFactory;
use AbstractFactory\Welder;
use AbstractFactory\IronDoor;

// Фабрика стальных дверей возвращает стальную дверь и сварщика
class IronDoorFactory implements DoorFactory
{
    public function makeDoor()
    {
        return new IronDoor();
    }

    public function makeFittingExpert()
    {
        return new Welder();
    }
}