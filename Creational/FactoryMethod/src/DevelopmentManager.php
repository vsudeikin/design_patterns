<?php
namespace FactoryMethod;

use FactoryMethod\Developer;
use FactoryMethod\HiringManager;

class DevelopmentManager extends HiringManager
{

    public function makeInterviewer()
    {

        return new Developer();
        
    }
}