<?php
require 'Film.php';
require 'FilmRepository.php';

$filmRepository = new FilmRepository('localhost','webdev','student','secret');
//Get the id from the query string e.g. for show.php?id=2, $_GET['id'] has a value of 2
$id =  $_GET['id'];
$film = $filmRepository->find($id);

// Load the view
require "views/edit.view.php";
