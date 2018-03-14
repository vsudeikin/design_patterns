<?php
namespace Flyweight;

class TeaShop
{
    protected $orders;
    protected $teaMaker;

    public function __construct($teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    public function takeOrder($teaType, $table)
    {
        $this->orders[$table] = $this->teaMaker->make($teaType);
    }

    public function serve()
    {
        foreach ($this->orders as $table => $tea) {
            echo "Serving tea to table# " . $table . "\n";
        }
    }
}