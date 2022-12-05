<?php // class-methods.php

class Product
{
    public $name = 'soap';
    public $price = 100;

    public function priceAsCurrency($divisor = 1, $currenceSymbol='₹')
    {
        $priceAsCurrency = $this->price / $divisor;
        
        return $currenceSymbol . $priceAsCurrency;
    }

}

$product = new Product();

print $product->priceAsCurrency();