<?php
namespace Bridge;

interface WebPageInterface
{
    public function __construct($theme);
    
    public function getContent();
}