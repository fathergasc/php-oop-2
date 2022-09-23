<?php

trait Address
{
    public $address;

    public function setAddress($address)
    {
        if (strlen($address) > 10) {
            return $this->address = $address;
        } else {
            throw new Exception('L\'indirizzo è troppo corto. Inserisci un\'indirizzo completo');
        }
    }
}
