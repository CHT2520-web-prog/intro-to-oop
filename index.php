<?php
require 'Film.php';
require 'FilmRepository.php';

$filmRepository = new FilmRepository('db','webdev','student','secret');

$films = $filmRepository->all();

require "views/index.view.php";
