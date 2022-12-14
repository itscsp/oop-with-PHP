<?php

 require_once 'Book.php';

class DigitalBook extends Book
{

    public $fileSize;

    public function __construct(string $title, string $author, int $price, int $fileSize)
    {
        parent::__construct( $title, $author, $price); // assigniing to parent constructor

        $this->fileSize = $fileSize;
    }

    public function getfileSize(): string
    {
        return $this->fileSize;
    }

    public function print(): string
    {
        return "{$this->title}, {$this->author}, fileSize: {$this->fileSize}kb";
    }

}