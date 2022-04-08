<?php 
class Song 
{
    public $songId;
    public $title;
}
$octopusSong = new Song();

$octopusSong->songId = 1;
$octopusSong->title = "Octopus's Garden";

$helloSong = new Song();
$helloSong->songId = 2;
$helloSong->title = "Hello is it me";

// var_dump($octopusSong);

class Playlist 
{
    public $name;
    public $songs = [];

    public function addSong($song) {
        $this->songs[] = $song;
    }
}

$playlist = new Playlist();
$playlist->name = "Rock!";
$playlist->addSong($octopusSong);
$playlist->addSong($helloSong);


var_dump($playlist->songs); 