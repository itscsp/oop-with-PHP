<?php 

class song 
{
    public $name;
    public $numberOfPlays;

    /**
     * 
     * @param sting $name
     * @param int $numberOfPlays
     * 
     */

    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;

    }
}