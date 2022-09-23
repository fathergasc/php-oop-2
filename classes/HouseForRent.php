<?php

require_once __DIR__ . './House.php';

class HouseForRent extends House
{

    public $rentPrice;

    public function __construct($rentPrice, $type, $squareMeters, $floors, $rooms, $numberOfBedrooms, $numberOfBathrooms)
    {
        parent::__construct($type, $squareMeters, $floors, $rooms, $numberOfBedrooms, $numberOfBathrooms);
        $this->rentPrice = $rentPrice;
    }
}
