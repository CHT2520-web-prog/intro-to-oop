<?php
require 'Film.php';
require 'FilmRepository.php';

// Create a new film repository object, pass in the database connection settings
$filmRepository = new FilmRepository('localhost','webdev','student','secret');

//Get the id from the hidden field in the form
$id = (int) $_POST['id'];

// Ask the film repository to delete the film
$filmRepository->delete($id);

//Redirect to the home page
header('Location: index.php');
die();
?>
