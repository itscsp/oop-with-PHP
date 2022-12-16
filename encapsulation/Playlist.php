<?php 

class Playlist
{
    private $songs = [];

    public function addSong(Song $song): void
    {
        $this->songs[] = $song;
    }

    public function displaySong()
    {
        return $this->songs;
    }
}