<?php

require_once "HighWay.php";

final class ResidentialWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle)
    {
       
            $this->currentVehicles[] = $vehicle;
        
    }
}