<?php
class Genres
{
    public $firstGenre;
    public $descriptionGenre;
    // SI POSSONO INSERIRE AL MASSIMO TRE GENERI

    public function __construct($firstGenre, $descriptionGenre)
    {
        $this->firstGenre = $firstGenre;
        $this->descriptionGenre = $descriptionGenre;
    }
}
