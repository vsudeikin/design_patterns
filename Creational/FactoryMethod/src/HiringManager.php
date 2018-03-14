<?php
namespace FactoryMethod;

abstract class HiringManager
{

    //фабричный метод
    abstract public function makeInterviewer();

    public function takeInterview()
    {

        $interviewer = $this->makeInterviewer();

        $interviewer->askQuestions();
        
    }

}