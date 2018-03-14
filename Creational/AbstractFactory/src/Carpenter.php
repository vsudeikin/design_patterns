<?php 
namespace AbstractFactory;

use AbstractFactory\DoorFittingExpertInterface as DoorFittingExpert;

class Carpenter implements DoorFittingExpert
{
    public function getDescription()
    {
        echo 'I can only fit wooden doors';
    }
}