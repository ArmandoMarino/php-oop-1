<?php

class Movie
{
    // Variabili d'istanza (perchè variano a secondo dell'istanza)
    public $id;
    public $title;
    public $date;
    public $lang;
    public $overview;
    public $poster;

    //costruttore che prepara le variabili che in questo caso i movies dovranno avere
    public function __construct($_id, $_title, $_date, $_lang, $_overview, $_poster)
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->date = $_date;
        $this->lang = $_lang;
        $this->overview = $_overview;
        $this->poster = $_poster;
    }
    
    // Funzione per agganciare il path immagini
    public function getPath(){
        return 'https://image.tmdb.org/t/p/original'. $this->poster;
    }
}

?>