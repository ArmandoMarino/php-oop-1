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
}


$cuandoSeaJoven = new Movie(1, 'Cuando Sea Joven','2022-09-14', 'es', '70-year-old Malena gets a second chance at life when she magically turns into her 22-year-old self. Now, posing as \"Maria\" to hide her true identity, she becomes the lead singer of her grandson\'s band and tries to recover her dream of singing, which she had to give up at some point.','/6gIJuFHh5Lj4dNaPG3TzIMl7L68.jpg');

$theGodfather = new Movie (2,'The Godfather', '1972-03-14', 'en', 'Spanning the years 1945 to 1955, a chronicle of the fictional Italian-American Corleone crime family. When organized crime family patriarch, Vito Corleone barely survives an attempt on his life, his youngest son, Michael steps in to take care of the would-be killers, launching a campaign of bloody revenge.', '/3bhkrj58Vtu7enYsRolD1fZdja1.jpg');





?>