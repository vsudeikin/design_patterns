<?php
namespace Decorator;
use Decorator\CoffeeInterface as Coffee;

class MilkCoffee implements Coffee
{
    protected $coffee;

    public function __construct($coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 2;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', milk';
    }
}
