<?php

abstract class vehicle {

    protected string $color ;
    protected int $nbSeats ;

    public function __construct(string $color,int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }


    abstract public function changeWheel();
}