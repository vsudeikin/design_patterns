<?php
namespace FactoryMethod;

use FactoryMethod\CommunityExecutive;
use FactoryMethod\HiringManager;

class MarketingManager extends HiringManager
{

    public function makeInterviewer()
    {

        return new CommunityExecutive();
        
    }
}
