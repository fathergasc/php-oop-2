<?php

require_once __DIR__ . './User.php';
require_once __DIR__ . '/../traits/Address.php';

class Employee extends User
{

    use Address;

    public $position;

    public function __construct($position,$name, $lastname, $username, $password)
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
