<?php

// EXCEPTION - > "Try" ligne 29 / "catch" ligne 32 / "finally" ligne 37

require_once "Car.php";
require_once "PedestrianWay.php";

$car = new Car('black', 4);
$bike = new Bike('red', 2);
$schoolBus = new Bus('yellow', 40);
$skateBoard = new SkateBoard('pink', 2);

$pedestrianWay = new PedestrianWay();

var_dump ("Au tout début", $pedestrianWay->getCurrentVehicles());

var_dump ("Echec de l'ajout de la la voiture");
$pedestrianWay->addVehicle($car);
var_dump($pedestrianWay->getCurrentVehicles());

var_dump ("Reussite de l'ajout de la voiture");
$pedestrianWay->addVehicle($bike);
var_dump ($pedestrianWay->getCurrentVehicles());

$car = new Car('green', 4, 'electric');

// Test sans le frein à main mis au départ

try{
    echo $car->start() . '</br>';
}
catch (Exception $e)
{
    echo $e->getMessage() . '</br>';
    echo $car->setParkBrake() . '</br>';
}
finally
{
    echo "Ma voiture roule comme un donut.</br>";
}

echo '</br>';

echo $car->setParkBrake();

try{
    echo $car->start() . '</br>';
}
catch (Exception $e)
{
    echo 'Warning: ' . $e->getMessage() . '</br>';
    echo $car->setParkBrake() . '</br>';
}
finally
{
    echo "Ma voiture roule comme un donut.</br>";
}

?>