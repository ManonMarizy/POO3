<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    /**
     *
     */
    public function changeWheel()
    {
    }

    /**
     * @return bool
     */
    public function switchOn()
    {
        if ($this->currentSpeed > 10)
            return true;
        else
            return false;
    }

    /**
     * @return false
     */
    public function switchOff()
    {
        return false;
    }
}
