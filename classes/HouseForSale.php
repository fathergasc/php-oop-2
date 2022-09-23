<?php

require_once __DIR__ . './House.php';

class HouseForSale extends House
{

    public $buyingPrice;

    public function __construct($buyingPrice, $type, $squareMeters, $floors, $rooms, $numberOfBedrooms, $numberOfBathrooms)
    {
        parent::__construct($type, $squareMeters, $floors, $rooms, $numberOfBedrooms, $numberOfBathrooms);
        $this->buyingPrice = $buyingPrice;
    }
}
