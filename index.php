<?php
include __DIR__ . '/classes/Movie.php';
include __DIR__ . '/classes/Genres.php';
include __DIR__ . '/Data.php';
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
                    <?= $movie->title ?> - <?= $movie->length ?> - <?= $movie->country ?> - <?= $movie->director ?> - <?= $movie->publicationYear ?> - <?= $movie->genres ?></li>
            <?php } ?>
        </ul>
    </div>
</body>

</html>