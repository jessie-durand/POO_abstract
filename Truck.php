<?php

require_once 'Vehicle.php';

class Truck extends Vehicle {
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    private int $storageCapacity = 30;
    private int $ladingTruck = 0;
    private int $energy;


    public function __construct(string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
    }

    public function getEnergy(): string 
    {
        return $this->energy;
    }

    //Cars
    public function setEnergy(string $energy)
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
        }
        return $this;
    }

    public function getStorageCapacity():int 
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): int
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getLadingTruck(): int 
    {
        return $this->ladingTruck;
    }

    public function setLadingTruck($ladingTruck): int 
    {
        $this->ladingTruck = $ladingTruck;
    }

    public function lading() {
        if($this->ladingTruck < $storageCapacity) {
            return "IN FILLING !";
        } else {
            return "FULL!";
        }
    }

    public function start()
    {
        $this->currentSpeed = 1;
        return "Let's Go Truck !";
    }

   

}