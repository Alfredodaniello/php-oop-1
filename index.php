<?php 
class Movie {

public $title;
public $year;
public $genre;
public $director;

public function __construct($_title, $_genre, $_director) {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->director = $_director;
}

}

$Drive = new Movie("Drive", "Drama", "Refn");
var_dump($Drive)

?>