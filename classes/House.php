<?php

require_once __DIR__ . '/../traits/Address.php';

class House
{

    use Address;

    public $type;
    public $squareMeters;
    public $floors;
    public $rooms;
    public $numberOfBedrooms;
    public $numberOfBathrooms;

    public function __construct($type, $squareMeters, $floors, $rooms, $numberOfBedrooms, $numberOfBathrooms)
    {
        $this->type = $type;
        $this->squareMeters = $squareMeters;
        $this->floors = $floors;
        $this->rooms = $rooms;
        $this->numberOfBedrooms = $numberOfBedrooms;
        $this->numberOfBathrooms = $numberOfBathrooms;
    }
}
