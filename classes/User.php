<?php

require_once __DIR__ . '/../traits/Address.php';

class User {

    use Address;

    public $name;
    public $lastname;
    public $username;
    public $password;
    public $accessLevel;

    public function __construct($name, $lastname, $username, $password, $accessLevel = 'user')
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->accessLevel = $accessLevel;
        $this->username = $username;
        $this->password = $password;
    }
}