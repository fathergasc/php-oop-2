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
require_once __DIR__ . '/classes/House.php';
require_once __DIR__ . '/classes/HouseForRent.php';
require_once __DIR__ . '/classes/HouseForSale.php';

$user1 = new User ('Marco', 'Canovi', 'canovi76', '1234');
try {
    $user1->setAddress('via Roma');
} catch (Exception $e) {
    echo "Errore: " . $e->getMessage();
}
var_dump($user1);


$employee1 = new Employee('Web Developer Junior','Andrea', 'Quaglioni', 'fathergasc', '9876');
try {
    $user1->setAddress('via Napoli 24, Bologna');
} catch (Exception $e) {
    echo "Errore: " . $e->getMessage();
}
var_dump($employee1);


$houseForRent1 = new HouseForRent('800€/mese','Appartamento', '120', '1', '6', '2', '1');
try {
    $user1->setAddress('via Rizzoli 28, Bologna');
} catch (Exception $e) {
    echo "Errore: " . $e->getMessage();
}
var_dump($houseForRent1);


$houseForSale1 = new HouseForSale('300.000€','Villetta a Schiera', '140', '2', '9', '3', '2');
try {
    $user1->setAddress('via Bruno 28, Bologna');
} catch (Exception $e) {
    echo "Errore: " . $e->getMessage();
}
var_dump($houseForSale1);
?>
    
</body>
</html>