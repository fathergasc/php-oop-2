<?php

trait Address {
    public $address;

    public function setAddress($address) {
        return $this->address = $address;
    }
}