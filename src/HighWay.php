<?php


abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicles = [];
    /**
     * @var int
     */
    protected $nbLane;
    /**
     * @var int
     */
    protected $maxSpeed;
    /**
     * HighWay constructor.
     * @param $nbLane
     * @param $maxSpeed
     */
    private function __construct($nbLane,$maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }
    abstract public function addVehicle(Vehicle $vehicle);
    /**
     * @return array
     */
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }
    /**
     * @param array $currentVehicles
     */
    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;
    }
    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
    /**
     * @return int
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }
    /**
     * @param int $nbLane
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }
}