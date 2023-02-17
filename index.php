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

// var_dump($movies_objects);
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
    <div id="app" class="container m-5">
        <div class="row g-4">
            <?php foreach ($movies_objects as $movies_object) : ?>
                    <div class="col-12 col-md-6 col-lg-4">
                            <div class="my-card p-3 text-center">
                                <figure><img class="img-fluid" src=<?= $movies_object->poster ?> alt=""></figure>
                                <h5> <?= $movies_object->title ?> </h5>
                                <p><?= $movies_object->lang ?></p>
                                <h5><?= $movies_object->date ?></h5>
                            </div>
                    </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>