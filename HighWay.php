<?php

require_once "Car.php";
require_once "Bus.php";

abstract class HighWay {
    protected array $currentVehicles = [] ;
    protected int $nbLane ;
    protected int $maxSpeed ;

    public function __construct(){

        $car = new Car("black",4);
        $bus = new Bus("yellow", 40);

        $this->setCurrentVehicles([
            $car, $bus
        ]);

    }

    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    public function getNbLane()
    {
        return $this->nbLane;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

  

    
    
    public function setCurrentVehicles(array $vehicles)
    {
            $this->currentVehicles = $vehicles;
    }

    

    public function setNbLane(int $nbLane): void
    {
            $this->nbLane = $nbLane;
    }

   

    public function SetMaxSpeed(int $maxSpeed)
    {
        return $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicle);
    


}