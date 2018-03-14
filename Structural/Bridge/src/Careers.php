<?php
namespace Bridge;

use Bridge\WebPageInterface as WebPage;

class Careers implements WebPage
{
    protected $theme;

    public function __construct($theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return "Careers page in " . $this->theme->getColor() . "\n";
    }
}