<?php 

require_once 'Playlist.php';
require_once '../song.php';

$playlist = new Playlist();

$song1 = new song('Black', 101);

// $song2 = 'Yesterday';
$song2 = new song('Yesterday', 102);

$playlist->addSong($song1);
$playlist->addSong($song2);

foreach($playlist->songs as $song) {
    print $song->name . PHP_EOL;
}

