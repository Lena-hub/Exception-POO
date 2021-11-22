<?php

require_once "HighWay.php";

final class MotorWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle)
    {
        if(!$vehicle instanceof Bike || !$vehicle instanceof SkateBoard)
        {
            $this->currentVehicles[] = $vehicle;
        }
    }
    
}