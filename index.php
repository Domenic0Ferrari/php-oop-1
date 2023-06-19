<?php

class Movie
{
    public string $title;
    public string $length;
    public string $country;
    public string $director;
    public int $publicationYear;

    // COSTRUTTORE
    public function __construct(string $title, string $length, string $country, string $director, int $publicationYear)
    {
        $this->title = $title;
        $this->length = $length;
        $this->country = $country;
        $this->director = $director;
        $this->publicationYear = $publicationYear;
    }

    // METODO
    public function getInformation()
    {
        return $this->title . ', ' . $this->length . ', ' . $this->country . ', ' . $this->director . ', ' . $this->publicationYear . '.' . '<br>';
    }
}

$filmOne = new Movie('Fight Club', '139 min', 'America', 'David Fincher', 1999);
var_dump($filmOne);
echo $filmOne->getInformation();

$filmTwo = new Movie('Principessa Mononoke', '133 min', 'Japan', 'Hayao Miyazaki', 1997);
echo $filmTwo->getInformation();
