<?php

namespace App\Stuff\Things;

class Potato
{
    private $water = 0;

    public function water()
    {
        $this->water += 1;
        dump($this->water." water");
    }

    public function hasGrown()
    {
        return $this->water >= 5;
    }
}