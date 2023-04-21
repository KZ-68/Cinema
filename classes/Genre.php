<?php

class Genre {
    // Attributs
    private string $_nameGenre; 
    private array $_moviesGenre;

    // Constructeur
    public function __construct(string $nameGenre) {
        $this->_nameGenre = $nameGenre;
        $this->_moviesGenre = [];
    }

    // Méthodes
    public function __toString() {
        return "<h3>Le genre ".$this->_nameGenre." est associé à X films :</h3>"; 
    }

    public function addMoviesGenre(Film $movieGenre) {
        $this->_moviesGenre[] = $movieGenre; // array push de Film
    }

    public function displayGenreList() {
        $result = "";
        foreach ($this->_moviesGenre as $movieGenre) {
            $result .= " ".$movieGenre->getTitle()." <br/> ";
        }
        return $result;
    }

    // Getters et Setters
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