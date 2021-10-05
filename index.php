<?php
    require_once __DIR__ . '/data/movies.php';
    require_once __DIR__ . '/models/movie.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enciclopedia Marvel</h1>
    <section>
    <?php
        foreach ($movies as $movie) {
            $movie_instance = new movie ($movie['id'], $movie['title'], $movie['genre'], $movie['director'], $movie['actors']);
    ?> 
    <div>
        <b>Titolo:</b> <?= $movie_instance->title ?> <br>
        <b>Genere:</b> <?= $movie_instance->genre ?> <br>
        <b>Regista:</b> <?= $movie_instance->director ?> <br>
        <b>Attori:</b> <?php foreach($movie_instance->actors as $actor) { echo $actor . " "; } ?> <br>
    </div>
    <br>
    <?php } ?>
    </section>
</body>
</html>