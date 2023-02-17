<?php

class Movie
{
    // Variabili d'istanza (perchè variano a secondo dell'istanza)
    public $title;
    public $year;
    public $lang;
    public $genre;
    public $poster;

    public function __construct($_title, $_year, $_lang, $_genre, $_poster)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->lang = $_lang;
        $this->genre = $_genre;
        $this->poster = $_poster;
    }
}


$dayafter = new Movie();







?>