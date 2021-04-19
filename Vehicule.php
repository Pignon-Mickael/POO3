<?php

class Vehicule
{

    protected string $color;

    protected int $nbSeats;

    protected int $nbWheels;

    public function __construct(string $color, int $nbSeats, int $nbWheels)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->nbWheels = $nbWheels;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): self
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Get the value of nbSeats
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * Set the value of nbSeats
     *
     * @return  self
     */
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    /**
     * Get the value of nbWheels
     */
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    /**
     * Set the value of nbWheels
     *
     * @return  self
     */
    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;

        return $this;
    }
}
