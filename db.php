<?php
$arrGenres = [
    new Genres('Action', 'Lorem Action'),
    new Genres('Thriller', 'Lorem Thriller'),
    new Genres('Drama', 'Lorem Drama'),
    new Genres('Adventure', 'Lorem Adventure'),
    new Genres('Noir', 'Lorem Noir'),
    new Genres('Gangstar', 'Lorem Gangstar'),
    new Genres('War', 'Lorem War'),
    new Genres('Horror', 'Lorem Horror')
];

$movies = [
    new Movie('Fight Club', '139 min', 'America', 'David Fincher', 1999, [$arrGenres[0]]),
    new Movie('Principessa Mononoke', '133 min', 'Japan', 'Hayao Miyazaki', 1997, [$arrGenres[3]]),
    new Movie('Il Padrino', '175 min', 'America', 'Francis Ford Coppola', 1972, [$arrGenres[5]]),
    new Movie('Lo Squalo', '124 min', 'America', 'Steven Spielberg', 1975, [$arrGenres[7]]),
    new Movie('Apocalypse Now', '153 min', 'America', 'Francis Ford Coppola', 1979, [$arrGenres[0]]),
];
