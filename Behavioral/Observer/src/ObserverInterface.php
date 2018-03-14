<?php 

namespace Observer;

interface ObserverInterface
{
    public function onJobPosted(JobPost $job);
}