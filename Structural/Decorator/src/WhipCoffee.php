<?php
namespace Decorator;
use Decorator\CoffeeInterface as Coffee;

class WhipCoffee implements Coffee
{
    protected $coffee;

    public function __construct($coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 5;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', whip';
    }
}