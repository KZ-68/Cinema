<?php

class Genre {
    private string $_nameGenre; 
    private array $_filmsGenre;

    public function __construct(string $nameGenre) {
        $this->_nameGenre = $nameGenre;
        $this->_filmsGenre = [];
    }

    public function addFilmsGenre(Film $filmGenre) {
        $this->_filmsGenre[] = $filmGenre;
    }

    public function __toString() {
        return "<p> Le genre ".$this->_nameGenre." est associé à X films :"; 
    }

    public function afficherListeFilms() {
        $result = "";
        foreach ($this->_filmsGenre as $listeFilms) {
            $result .= "".$listeFilms->getTitle()."";
        }
        return $result;
    }

    public function getNameGenre() {
        return $this->_nameGenre;
    }

    public function setNameGenre($nameGenre) {
        $this->_nameGenre = $nameGenre;
    }

    public function getFilmsGenre() {
        return $this->_filmsGenre;
    }

    public function setFilmsGenre($filmGenre) {
        $this->_filmsGenre = $filmGenre;
    }
}