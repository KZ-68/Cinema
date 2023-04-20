<?php

class Film {
    // Attributs
    private string $_title;
    private DateTime $_dateRelease;
    private int $_duration;
    private string $_synopsis;
    private Réalisateur $_réalisateur;
    private Genre $_genre;
    private array $_casting;

    // Constructeur
    public function __construct(string $title, string $dateRelease, int $duration, string $synopsis, Réalisateur $réalisateur, Genre $genre) {
        $this->_title = $title;
        $this->_dateRelease = new DateTime($dateRelease);
        $this->_duration = $duration;
        $this->_synopsis = $synopsis;
    
        $this->_réalisateur = $réalisateur;
        $this->_réalisateur->addMovies($this);
        $this->_genre = $genre;
        $this->_genre->addMoviesGenre($this);
        $this->_casting = [];
    }

    // Méthodes
    public function __toString():string {
        return $this->_title;
    }

    public function addCasting(Casting $casting) {
        $this->_casting[] = $casting; // array push de Casting
    }

    public function durationFormat() { // Méthode permettant de convertir la durée d'un film en heures et en minutes
        $hours = intdiv($this->_duration, 60); // division entière par 60 minutes, par exemple 120 fera 2 heures
        $mins = $this->_duration % 60; // Le symbole modulo est le restant d'une division, donc pour 121 divisé par 60 il restera 1 min
        $duration = "$hours heures, $mins minutes";
        return $duration;
    }

    public function displayMovieList() {
        return "<h3>$this</h3>
        <p>Date de sortie : ".$this->_dateRelease->format("d.m.Y")."<br/> 
        Durée du film : ".$this->durationFormat()."</p>
        Synopsis :<br/>
        ".$this->_synopsis."";
    }

    public function displayMovieCasting() {
        $result = "<h3>Casting par film :</h3>
        Dans le Film ".$this->_title." ";
        foreach ($this->_casting as $casting) {
            $result .= $casting ;
        }
        return $result;
    }

    // Getters et Setters
    public function getTitle() {
        return $this->_title;
    }

    public function getDateRelease() {
        return $this->_dateRelease;
    }

    public function getDuration() {
        return $this->_duration;
    }

    public function getSynopsis() {
        return $this->_synopsis;
    }

    public function getRéalisateur() {
        return $this->_réalisateur;
    }

    public function getGenre() {
        return $this->_genre;
    }

    public function getCasting() {
        return $this->_casting;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

    public function setDateRelease($dateRelease) {
        $this->_dateRelease = new DateTime($dateRelease);
    }

    public function setDuration($duration) {
        $this->_duration = $duration;
    }

    public function setSynopsis($synopsis) {
        $this->_synopsis = $synopsis;
    }

    public function setRéalisateur($réalisateur) {
        $this->_réalisateur = $réalisateur;
    }

    public function setGenre() {
        return $this->_genre = $genre;
    }
}