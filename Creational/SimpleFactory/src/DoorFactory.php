<?php
namespace SimpleFactory;

use SimpleFactory\WoodenDoor;

class DoorFactory
{
    public static function makeDoor($width, $height)
    {

        return new WoodenDoor($width, $height);
        
    }
}