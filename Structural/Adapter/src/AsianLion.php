<?php
namespace Adapter;
use Adapter\LionInterface as Lion;

class AsianLion implements Lion
{
    public function roar()
    {
        echo "roar\n";
    }
}