<?php 
namespace ChainOfResponsibility;

class Bitcoin extends Account
{
    protected $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }
}