<?php

require_once "Highway.php";

    final class ResidentialWay extends Highway{

        public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
        {
            parent::__construct($currentVehicles, $nbLane, $maxSpeed);

            $this->nbLane = 2;
            $this->maxSpeed = 50;

        }

        public function addvehicle(Vehicle $vehicle)
        {
                $this->currentVehicles[] = $vehicle;
        }

    }