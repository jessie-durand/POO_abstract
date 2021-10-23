<?php

require_once 'Vehicle.php';

class Cars extends Vehicle {
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    private string $energy;
    private int $energyLevel; 

   public function __construct(string $energy) 
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string 
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Cars
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int 
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function start()
    {
        $this->currentSpeed = 1;
        return "La voiture démarre";
    }

}