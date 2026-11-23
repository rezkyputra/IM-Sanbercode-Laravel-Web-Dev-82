<?php
class Car
{
    public $merk;
    public $roda = 4;
    public $bahanBakar = "Bensin";

    public function __construct($string){
        $this->merk = $string;
    }
}

?>