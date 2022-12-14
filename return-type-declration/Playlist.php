<?php 

class playList
{
    public $songs = [];

    public function addSong(song $song): void
    {
        $this->songs[] = $song;
    }

    public function getLength(): int
    {
        return count($this->songs);
    }
}