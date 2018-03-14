<?php
namespace Decorator;
use Decorator\CoffeeInterface as Coffee;

class VanillaCoffee implements Coffee
{
    protected $coffee;

    public function __construct($coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 3;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', vanilla';
    }
}