<?php
namespace Bridge;
use Bridge\ThemeInterface as Theme;

class DarkTheme implements Theme
{
    public function getColor()
    {
        return 'Dark Black';
    }
}