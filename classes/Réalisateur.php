<?php

class Réalisateur extends Personne {
    private array $_films;

    public function __construct(string $firstname, string $lastname, string $sex, string $dateBirth) {
        parent::__construct($firstname, $lastname, $sex, $dateBirth);

        $this->_films = [];
    }

    public function addFilms(Film $film) {
        $this->_films[] = $film;
    }

    public function __toString() {
        return "<h3>Films de ".$this->getFirstname()." ".$this->getLastname()."</h3>";
    }
    
    public function afficherFilmographie() {
        $result = "";
        foreach ($this->_films as $film) {
            $result .= $film;
        }
        return $result;
    }
}