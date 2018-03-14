<?php
namespace FactoryMethod;

use FactoryMethod\InterviewerInterface as Interviewer;

class Developer implements Interviewer
{
    public function askQuestions()
    {
        echo 'Asking about design patterns!';
    }
}