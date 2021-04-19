<?php

require_once "Highway.php";

    final class MotorWay extends Highway{

        public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
        {
            parent::__construct($currentVehicles, $nbLane, $maxSpeed);

            $this->nbLane = 4;
            $this->maxSpeed = 130;

        }

        public function addvehicle(Vehicle $vehicle)
        {
            if($vehicle instanceof Car || $vehicle instanceof Truck){
                $this->currentVehicles[] = $vehicle;
            }
        }

    }
