<?php
include __DIR__ . '/classes/Movie.php';
include __DIR__ . '/classes/Genres.php';

$filmOne = new Movie('Fight Club', '139 min', 'America', 'David Fincher', 1999, [
    new Genres('Animation', 'Thriller', 'Drama')
]);
var_dump($filmOne);
echo $filmOne->getInformation();

$filmTwo = new Movie('Principessa Mononoke', '133 min', 'Japan', 'Hayao Miyazaki', 1997, [
    new Genres('Animation', 'Adventure', 'Drama')
]);
echo $filmTwo->getInformation();
