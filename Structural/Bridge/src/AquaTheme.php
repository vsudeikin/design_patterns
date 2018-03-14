<?php
namespace Bridge;
use Bridge\ThemeInterface as Theme;

class AquaTheme implements Theme
{
    public function getColor()
    {
        return 'Light blue';
    }
}