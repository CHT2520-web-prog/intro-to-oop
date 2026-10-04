<?php
require 'Film.php';
require 'FilmRepository.php';
$filmRepository = new FilmRepository('db','webdev','student','secret');
//Get the id from the query string e.g. for show.php?id=2, $_GET['id'] has a value of 2
$id =  (int) $_GET['id'];
//Ask the FilmRepository for the film
$film = $filmRepository->find($id);

// Load the view
require "views/show.view.php";

