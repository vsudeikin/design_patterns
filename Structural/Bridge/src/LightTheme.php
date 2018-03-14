<?php
namespace Bridge;
use Bridge\ThemeInterface as Theme;

class LightTheme implements Theme
{
    public function getColor()
    {
        return 'Off white';
    }
}