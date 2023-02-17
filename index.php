<?php

class Movie
{
    // Variabili d'istanza (perchè variano a secondo dell'istanza)
    public $id;
    public $title;
    public $year;
    public $lang;
    public $poster;

    //costruttore che prepara le variabili che in questo caso i movies dovranno avere
    public function __construct($_id, $_title, $_year, $_lang, $_poster)
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->year = $_year;
        $this->lang = $_lang;
        $this->poster = $_poster;
    }
}


$dayafter = new Movie(1, 'Cuando Sea Joven','2022-09-14', 'es', '/6gIJuFHh5Lj4dNaPG3TzIMl7L68.jpg');







?>