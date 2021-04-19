<?php

require_once "Highway.php";

    final class PedestrianWay extends Highway{

        public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
        {
            parent::__construct($currentVehicles, $nbLane, $maxSpeed);

            $this->nbLane = 1;
            $this->maxSpeed = 15;

        }

        public function addvehicle(Vehicle $vehicle)
        {
            if($vehicle instanceof Bike || $vehicle instanceof SkateBoard){
                $this->currentVehicles[] = $vehicle;
            }
        }

    }