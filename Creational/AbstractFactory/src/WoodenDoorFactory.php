<?php 
namespace AbstractFactory;

use AbstractFactory\Carpenter;
use AbstractFactory\DoorFactoryInterface as DoorFactory;
use AbstractFactory\WoodenDoor;

// Фабрика деревянных дверей возвращает плотника и деревянную дверь
class WoodenDoorFactory implements DoorFactory
{
    public function makeDoor()
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert()
    {
        return new Carpenter();
    }
}
