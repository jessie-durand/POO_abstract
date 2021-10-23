<?php

require_once 'Highway.php';

final class ResidentialWay extends Highway {

    public function addVehicle(Vehicle $vehicle)
    {
     $this->currentVehicles[] = $vehicle; 
    }

}