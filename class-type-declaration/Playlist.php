<?php 

class playList
{
    public $songs = [];

    public function addSong(song $song)
    {
        $this->songs[] = $song;
    }
}