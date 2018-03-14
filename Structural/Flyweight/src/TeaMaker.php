<?php
namespace Flyweight;

use Flyweight\KarakTea;

// Действует как фабрика и экономит чай
class TeaMaker
{
    protected $availableTea = [];

    public function make($preference)
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new KarakTea();
        }

        return $this->availableTea[$preference];
    }
}