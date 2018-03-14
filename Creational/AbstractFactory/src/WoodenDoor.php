<?php 
namespace AbstractFactory;

use AbstractFactory\DoorInterface as Door;

class WoodenDoor implements Door
{
    public function getDescription()
    {
        echo 'I am a wooden door';
    }
}