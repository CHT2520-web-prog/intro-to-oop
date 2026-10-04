<?php
require 'Film.php';
require 'FilmRepository.php';

$filmRepository = new FilmRepository('localhost','webdev','student','secret');

//This is a simple example we would normally do some form validation here

//Basic form processing
//Look at the name values of the form controls in create.php to see where these values 
// e.g. $_POST['title'] comes from <input type="text" id="title" name="title">
$film = new Film();
$film->id = $_POST['id'];
$film->title = $_POST['title'];
$film->year = $_POST['year'];
$film->duration = $_POST['duration'];


$filmRepository->update($film);

//Redirect the user to the home page
header('Location: index.php');
die();

