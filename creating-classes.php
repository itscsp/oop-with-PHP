<?php


class priceList
{
    public $priceList = 2000;
    public $price;

    public function priceAsCurrency() 
    {
        $priceAsCurrency = $this->price / 100;

        return $priceAsCurrency;
    }
 
}

$pl = new priceList();

$pl->price = 550;

$priceAsCurrency = $pl->priceAsCurrency();

var_dump($priceAsCurrency) . PHP_EOL;



$pl2 = new priceList();

$pl2->price = 650;

$priceAsCurrency = $pl2->priceAsCurrency();

var_dump($priceAsCurrency) . PHP_EOL;