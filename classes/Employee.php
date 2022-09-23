<?php

require_once __DIR__ . './User.php';

class Employee extends User
{
    public $position;

    public function __construct($position, $name, $lastname, $username, $password)
    {
        parent::__construct($name, $lastname, $username, $password);
        $this->position = $position;
        $this->setAccessLevel();
    }

    public function setAccessLevel()
    {
        $this->accessLevel = 'employee';
    }
}
