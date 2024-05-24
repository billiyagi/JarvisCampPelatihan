<?php

// Define the Kendaraan class
class Kendaraan
{
    public $merk;
    public $model;

    public function __construct($merk, $model)
    {
        $this->merk = $merk;
        $this->model = $model;
    }

    public function deskripsi()
    {
        return "Kendaraan ini adalah $this->merk $this->model.";
    }
}

// Define a new class that inherits from Kendaraan
class Mobil extends Kendaraan
{
    public $jumlahPintu;

    public function __construct($merk, $model, $jumlahPintu)
    {
        parent::__construct($merk, $model);
        $this->jumlahPintu = $jumlahPintu;
    }

    public function deskripsiLengkap()
    {
        return "Mobil ini adalah $this->merk $this->model dengan $this->jumlahPintu pintu.";
    }
}

// Create an object based on the new class
$mobilBaru = new Mobil("Toyota", "Corolla", 4);
echo $mobilBaru->deskripsiLengkap();
