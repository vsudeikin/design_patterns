<?php 
namespace Observer;

use Observer\JobPost;
use Observer\ObservableInterface as Observable;
use Observer\ObserverInterface as Observer;

class JobPostings implements Observable
{
    protected $observers = [];

    public function notify(JobPost $jobPosting)
    {
        foreach ($this->observers as $observer) {
            $observer->onJobPosted($jobPosting);
        }
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function addJob(JobPost $jobPosting)
    {
        $this->notify($jobPosting);
    }
}