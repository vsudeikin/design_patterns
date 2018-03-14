<?php 
namespace AbstractFactory;

interface DoorFactoryInterface
{
    //return Door object
    public function makeDoor();

    //return Expert object
    public function makeFittingExpert();
}