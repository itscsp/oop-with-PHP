<?php

require_once 'Book.php';

class Physicalbooks extends Book
{

    public $weight;

    public function __construct(string $title, string $author, int $price, int $weight) 
    {
        parent::__construct( $title, $author, $price); // assigning to parent constructor

        $this->weight = $weight;
    }

    public function getWeight(): string
    {
        return $this->weight;
    }

    
    public function print(): string
    {
        return "{$this->title}, {$this->author}, weight: {$this->weight}";
    }

}