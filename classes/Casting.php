<?php

class Casting {
    // Attributs
    private Film $_movie;
    private Rôle $_role;
    private Acteur $_actor;

    // Constructeur
    public function __construct(Film $movie, Rôle $role, Acteur $actor) {
        $this->_movie = $movie;
        $this->_role = $role;
        $this->_actor = $actor;
        
        $this->_movie->addCasting($this); 
        $this->_role->addCasting($this);
        $this->_actor->addCasting($this);
    }

    // Méthodes
    public function __toString() {
        return "".$this->_role->getCharacterName()." à été incarné par ".$this->_actor->getNomComplet().", ";
    }
 
    // Getters et Setters
    public function getMovie() {
        return $this->_movie;
    }

    public function setMovie($movie){
        $this->_movie = $movie;
    }

    public function getRole() {
        return $this->_role;
    }

    public function setRole($role){
        $this->_role = $role;
    }

    public function getActor() {
        return $this->_actor;
    }

    public function setActor($actor) {
        $this->_actor = $actor;
    }
}

