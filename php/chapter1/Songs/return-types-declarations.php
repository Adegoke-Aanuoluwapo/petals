<?php


require_once 'playlist.php';
require_once 'Song.php';


$playlist = new Playlist();

$song1 = new Song("Blackberry", 149);

$song2 = new Song('Gratitude', 445);


$playlist->addSong($song1);
$playlist->addSong($song2);
