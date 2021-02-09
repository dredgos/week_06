<?php

require __DIR__ . "/vendor/autoload.php";

class lightSwitch
{
    private $lightOn = false;

    public function lightOn()
    {
        return $this->lightOn;
    }

    public function turnOn() 
    {
        $this->lightOn = true;
    }

    public function turnOff()
    {
        $this->lightOn = false;
    }

}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
dump($lightSwitch->lightOn()); // false

// you can turn it on
$lightSwitch->turnOn();
dump($lightSwitch->lightOn()); // true

// you can turn it off
$lightSwitch->turnOff();
dump($lightSwitch->lightOn()); // false