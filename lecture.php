<?php
class Film {
    public string $title; 
    private int $year; 
    function __construct(string $title, int $year){
        $this->title=$title;
        $this->setYear($year);
    }
    function setYear(int $year):void
    {
        if(!is_int($year) || $year<1895){
            throw  new  InvalidArgumentException ( 'Year must be an integer, at least 1895' ) ;
        }
        $this->year = $year;
    }
    function getYear():int{
        return $this->year;
    }
}
$film = new Film("Jaws",1975);
// $film->year = 3; // Error 'Year must be an integer, at least 1895'
$film->setYear(3); //
// class Film
// {
//     public string $id;
//     public string $title;
//     public int $year;
//     public int $duration;

//     public function __construct()
//     {
//         //leave empty
//     }

//     function getAge():int{
//         return date("Y") - $this->year;
//     }
// }

// $conn = new PDO("mysql:host=localhost;dbname=webdev", "student", "secret");
// $stmt = $conn->query("SELECT id, title, year, duration FROM films WHERE id = 3");
// $film =  $stmt->fetch();
// //The Incredibles was made in 2004.
// echo "<p>{$film['title']} was made in {$film['year']}.</p>";


// $stmt = $conn->query("SELECT id, title, year, duration FROM films WHERE id = 3");
// $film =  $stmt->fetchObject(Film::class);
// echo "<p>{$film->title} was made in {$film->year}.</p>";
// echo "<p>{$film->title} is {$film->getAge()} years old.</p>";


// require 'Film.php';
// require 'FilmRepository.php';
// $filmRepository = new FilmRepository('localhost','webdev','student','secret');
// $films = $filmRepository->all();

// foreach ($films as $film) {
//     echo "<p>{$film->title}</p>";
// }
