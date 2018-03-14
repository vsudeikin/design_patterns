<?php
namespace AbstractFactory;

use AbstractFactory\DoorFittingExpertInterface as DoorFittingExpert;

class Welder implements DoorFittingExpert
{
    public function getDescription()
    {
        echo 'I can only fit iron doors';
    }
}