<?php 
namespace AbstractFactory;

use AbstractFactory\DoorInterface as Door;

class IronDoor implements Door
{
    public function getDescription()
    {
        echo 'I am an iron door';
    }
}