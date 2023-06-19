<?php

class Movie
{
    public $title;
    public $length;
    public $country;
    public $director;
    public $publicationYear;
}

$filmOne = new Movie();
$filmOne->title = 'Fight Club';
$filmOne->length = '139 min';
$filmOne->country = 'America';
$filmOne->director = 'David Fincher';
$filmOne->publicationYear = '1999';
var_dump($filmOne);
