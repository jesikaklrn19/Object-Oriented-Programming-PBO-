<?php

// PARENT
class Clothes
{
    public $brand;        // public    : bisa diakses dari mana saja
    protected $price;     // protected : hanya class ini dan child-nya
    private $costPrice;   // private   : hanya class Clothes

    function __construct($brand, $price, $costPrice)
    {
        $this->brand = $brand;
        $this->price = $price;
        $this->costPrice = $costPrice;
    }

    // "pintu" public untuk membaca data private
    public function getCostPrice()
    {
        return $this->costPrice;
    }
}

// CHILD
class Jacket extends Clothes
{
    public function showInfo()
    {
        echo "Jacket " . $this->brand . " - Rp " . $this->price . "<br>";
        // echo $this->costPrice;   // ERROR, private milik Clothes
    }
}

class Tshirt extends Clothes
{
    public function showInfo()
    {
        echo "T-shirt " . $this->brand . " - Rp " . $this->price . "<br>";
    }
}

class Pants extends Clothes
{
    public function showInfo()
    {
        echo "Pants " . $this->brand . " - Rp " . $this->price . "<br>";
    }
}

// HOW TO USE
$jacket = new Jacket("Uniqlo", 900000, 300000);
$tshirt = new Tshirt("H&M", 150000, 80000);
$pants  = new Pants("Bershka", 800000, 250000);

$jacket->showInfo();
$tshirt->showInfo();
$pants->showInfo();

echo $jacket->brand . "<br>";           // bisa (public)
echo $jacket->getCostPrice() . "<br>";  // bisa (lewat method public)
// echo $jacket->price;                 // ERROR (protected, dari luar)
// echo $jacket->costPrice;             // ERROR (private)