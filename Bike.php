<?php

require_once 'Vehicle.php';

class  Bike extends Vehicle
{

    public function changeWheel()
    {
        return "change wheel of a bike";
    }

}