<?php
class Movie
{
    public string $title;
    public string $length;
    public string $country;
    public string $director;
    public int $publicationYear;
    // AGGIUNGERE UN ARRAY PER I GENERI
    public array $genres;

    // COSTRUTTORE
    public function __construct(string $title, string $length, string $country, string $director, int $publicationYear, array $genres = [])
    {
        $this->title = $title;
        $this->length = $length;
        $this->country = $country;
        $this->director = $director;
        $this->publicationYear = $publicationYear;
        // VERIFICO CHE SIANO DI TIPO 'GENRE'
        foreach ($genres as $genre) {
            if (!$genre instanceof Genres) {
                die('I generi devono essere di tipo Genres');
            }
        }
        $this->genres = $genres;
        // AGGIUNGO UN CONTROLLO SUL TITOLO, CHE NON PUò ESSERE LASCIATO VUOTO
        if ($title === '') {
            die('Il titolo non può essere vuoto');
        }
    }

    // METODO
    public function getInformation()
    {
        return $this->title . ', ' . $this->length . ', ' . $this->country . ', ' . $this->director . ', ' . $this->publicationYear . '.' . '<br>';
    }
}
