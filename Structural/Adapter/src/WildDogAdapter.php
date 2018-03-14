<?php
namespace Adapter;
use Adapter\LionInterface as Lion;

// Адаптер вокруг собаки сделает её совместимой с охотником
class WildDogAdapter implements Lion
{
    protected $dog;

    public function __construct($dog)
    {
        $this->dog = $dog;
    }

    public function roar()
    {
        $this->dog->bark();
    }
}