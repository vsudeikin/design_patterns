<?php
namespace FactoryMethod;

use FactoryMethod\InterviewerInterface as Interviewer;

class CommunityExecutive implements Interviewer
{
    
    public function askQuestions()
    {

        echo 'Asking about community building';
        
    }

}