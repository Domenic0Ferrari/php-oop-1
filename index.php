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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container bg-success">
        <h1 class="text-center text-primary">FILM</h1>
        <ul class="text-bg-success p-3"><?php foreach ($movies as $movie) { ?>
                <li>
                    <?= $movie->title ?> - <?= $movie->length ?> - <?= $movie->country ?> - <?= $movie->director ?> - <?= $movie->publicationYear ?> - <?php foreach ($movie->genres as $genre) { ?> <?= $genre->firstGenre ?> - <?= $genre->secondGenre ?> - <?= $genre->thirdGenre ?> <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>

</html>