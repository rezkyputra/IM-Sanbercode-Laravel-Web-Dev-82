<?php
require_once("Car.php");

class ElectricCar extends Car {
    public $bahanBakar = "Listrik";

    public function jalan(){
        return "Mobil jalan <br/>";
    }
}

?>