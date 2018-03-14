<?php
namespace Bridge;
use Bridge\WebPageInterface as WebPage;

class About implements WebPage
{
    protected $theme;

    public function __construct($theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return "About page in " . $this->theme->getColor() . "\n";
    }
}