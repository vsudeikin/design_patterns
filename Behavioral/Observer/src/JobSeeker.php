<?php 
namespace Observer;

use Observer\ObserverInterface as Observer;

class JobSeeker implements Observer
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function onJobPosted(JobPost $job)
    {
        // Do something with the job posting
        echo 'Hi ' . $this->name . '! New job posted: '. $job->getTitle() . PHP_EOL;
    }
}