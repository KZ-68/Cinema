<?php

class Film {
    private string $_title;
    private DateTime $_dateRelease;
    private int $_duration;
    private string $_synopsis;
    private Réalisateur $_réalisateur;
    private Genre $_genre;
    private Casting $_casting;



    public function __construct(string $title, string $dateRelease, int $duration, string $synopsis, Réalisateur $réalisateur, Genre $genre, Casting $casting) {
        $this->_title = $title;
        $this->_dateRelease = new DateTime($dateRelease);
        $this->_duration = $duration;
        $this->_synopsis = $synopsis;
        
        $this->_réalisateur = $réalisateur;
        $this->_réalisateur->addFilms($this);
        $this->_genre = $genre;
        $this->_genre->addFilmsGenre($this);
        $this->_casting = $casting;
        $this->_casting->addFilmsCasting($this);

    }

    public function __toString():string {
        return "".$this->_title." (".$this->_dateRelease->format("d.m.Y").")  : ".$this->_duration." minutes <br/>
        Synopsis : <br/>
        <p>".$this->_synopsis."</p>";
    }

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
}