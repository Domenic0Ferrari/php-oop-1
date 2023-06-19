<?php
include __DIR__ . '/Models/Movie.php';
include __DIR__ . '/Models/Genres.php';
include __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>
    <div class="container">
        <ul><?php
            foreach ($movies as $movie) { ?>
                <li>
                    <?= $movie->title ?> - <?= $movie->length ?> - <?= $movie->country ?> - <?= $movie->director ?> - <?= $movie->publicationYear ?> - <?php foreach ($movie->genres as $genre) { ?> <?= $genre->firstGenre ?> - <?= $genre->secondGenre ?> - <?= $genre->thirdGenre ?> <?php } ?></li> <?php } ?>
        </ul>
    </div>
</body>

</html>