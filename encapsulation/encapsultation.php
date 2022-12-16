<?php 

require_once 'Playlist.php';
require_once 'song.php';

$beatlesSongs = new Playlist();

$song = new song('Yesterday', 100);
$fakeSong = 'This is not a song.. it is a string';

$beatlesSongs->addSong($song);

var_dump($beatlesSongs->displaySong());