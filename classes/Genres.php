<?php
class Genres
{
    public $firstGenre;
    public $secondGenre;
    public $thirdGenre;
    // SI POSSONO INSERIRE AL MASSIMO TRE GENERI

    public function __construct($firstGenre, $secondGenre, $thirdGenre)
    {
        $this->firstGenre = $firstGenre;
        $this->secondGenre = $secondGenre;
        $this->thirdGenre = $thirdGenre;
    }
}
