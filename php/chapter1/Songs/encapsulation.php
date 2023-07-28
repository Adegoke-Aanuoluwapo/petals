<?php

require_once 'playlist.php';
require_once 'Song.php';

$beatleSongs = new Playlist();

$song = new Song('Yesterday', 100);

$fakeSong = 'This is not a song.. it is a string';


$beatSongs = new Playlist();
$beatSongs-> 