<?php // contructor.php

class Product
{
    public $name;
    public $price;

    public function __construct($name, $price = 1)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function priceAsCurrency($divisor = 1, $currenceSymbol='₹')
    {
        $priceAsCurrency = $this->price / $divisor;
        
        return $currenceSymbol . $priceAsCurrency;
    }

}

$product = new Product('tyres', 100);

print $product->name . PHP_EOL;
print $product->price . PHP_EOL;