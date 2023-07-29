<?php

require_once "Song.php";
 
$song = new Song("Ake Years of childhood", 123);

$song->setRating(4.2);

print $song->getRating(). '<br>';


var_dump($song);