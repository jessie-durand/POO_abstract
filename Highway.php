<?php


abstract class Highway {
    protected array $currentVehicles = [];
    protected int $nbLane;
    protected int $maxSpeed;


    public function getCurrentVehicles() : array 
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $vehicle)
    {
        $this->currentVehicles = $vehicle;
    }

    public function getNbLane() : int 
    {
        return $this->Nblane; 
    }

    public function setNbLane(int $nbLane) : int 
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed() : int 
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed; 
    }

    abstract public function addVehicle(Vehicle $vehicle);
}

?>