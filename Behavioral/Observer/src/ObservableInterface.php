<?php 

namespace Observer;

use Observer\ObserverInterface as Observer;

interface ObservableInterface
{
    public function notify(JobPost $jobPosting);
    public function attach(Observer $observer);
    public function addJob(JobPost $jobPosting);
}