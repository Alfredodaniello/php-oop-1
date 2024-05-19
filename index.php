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
public function getMovieInfo(){
    echo "Titolo: $this->title<br>";
    echo "Genere: $this->genre<br>";
    echo "Regista: $this->director<br>";
}

}

$Drive = new Movie("Drive", "Drama", "Refn");

$Arrival = new Movie ("Arrival", "Science", "Villeneuve");

echo "Film 1:<br>";
$Drive->getMovieInfo();
echo "Film 2:<br>";
$Arrival->getMovieInfo();


?>