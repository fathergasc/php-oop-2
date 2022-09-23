<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Employee.php';

$user1 = new User ('Marco', 'Canovi', 'canovi76', '1234');
$user1->setAddress('via Roma 18, Sassari');
var_dump($user1);
$employee1 = new Employee('Web Developer Junior','Andrea', 'Quaglioni', 'fathergasc', '9876');
$employee1->setAddress('via Napoli 24, Bologna');
var_dump($employee1);
?>
    
</body>
</html>