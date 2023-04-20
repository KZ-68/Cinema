<?php

class Réalisateur extends Personne {
    // Attributs
    private array $_movies;
    
    // Constructeur
    public function __construct(string $firstname, string $lastname, string $sex, string $dateBirth) {
        parent::__construct($firstname, $lastname, $sex, $dateBirth);

            $this->_movies = [];
    }
    
    // Méthodes
    public function addMovies(Film $movie) {
        $this->_movies[] = $movie;
    }

    public function __toString() {
        return $this->_firstname." ".$this->_lastname;
    }
    
    public function displayFilmography() {
        $result = "<h3>Films réalisé par $this :</h3>";
        foreach ($this->_movies as $movie) {
            $result .= $movie;
        }
        return $result;
    }
}