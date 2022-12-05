<?php 

declare(strict_types=1); // this check the argument must pass same data type 


require_once 'song.php';

$song = new Song('12356', 123);


var_dump($song->name);

print $song->name;
print $song->numberOfPlays;