<?php
require_once("Car.php");
require_once("ElectricCar.php");

$xenia = new Car("Xenia");

echo "Merk kendaraan : " . $xenia->merk . "<br/>";
echo "Jumlah Roda kendaraan : " . $xenia->roda . "<br/>";
echo "Bahan Bakar kendaraan : " . $xenia->bahanBakar . "<br/>";

echo "------------------------<br/>";

$tesla = new ElectricCar("Tesla");

echo "Merk kendaraan : " . $tesla->merk . "<br/>";
echo "Jumlah Roda kendaraan : " . $tesla->roda . "<br/>";
echo "Bahan Bakar kendaraan : " . $tesla->bahanBakar . "<br/>";
echo $tesla->jalan();

echo "------------------------<br/>";

?>