<?php

require_once 'Vehicle.php';

class  Bus extends Vehicle
{
    public function changeWheel()
    {
        return "change wheel of a bus";
    }

}