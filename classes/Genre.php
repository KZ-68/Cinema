<?php

class Genre {
    private string $_nameGenre; 
    private array $_moviesGenre;

    public function __construct(string $nameGenre) {
        $this->_nameGenre = $nameGenre;
        $this->_moviesGenre = [];
    }

    public function __toString() {
        return "<h3>Le genre ".$this->_nameGenre." est associé à X films :</h3>"; 
    }

    public function addMoviesGenre(Film $movieGenre) {
        $this->_moviesGenre[] = $movieGenre;
    }

    public function displayGenreList() {
        $result = "";
        foreach ($this->_moviesGenre as $movieGenre) {
            $result .= " ".$movieGenre->getTitle()." <br/> ";
        }
        return $result;
    }

    public function getNameGenre() {
        return $this->_nameGenre;
    }

    public function setNameGenre($nameGenre) {
        $this->_nameGenre = $nameGenre;
    }

    public function getMoviesGenre() {
        return $this->_moviesGenre;
    }

    public function setMoviesGenre($movieGenre) {
        $this->_moviesGenre = $movieGenre;
    }
}