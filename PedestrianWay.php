<?php

require_once "HighWay.php";
require_once "Bike.php";
require_once "SkateBoard.php";

final class PedestrianWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle)
    {
       
        if($vehicle instanceof Bike || $vehicle instanceof SkateBoard)
        {
            $this->currentVehicles[] = $vehicle;
        }
        
    }
}