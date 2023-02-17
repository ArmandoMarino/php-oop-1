<?php

// Importo la classe e i dati
include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/data/movies.php';

// Inizializzo
$movies_objects = [];

foreach ($movies as $movie){
    $movies_object = new Movie($movie['id'], $movie['title'], $movie['date'], $movie['lang'], $movie['overview'], $movie['poster']);
    $movies_objects[]= $movies_object;
};

var_dump($movies_objects);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <main>
        
    </main>
</body>
</html>