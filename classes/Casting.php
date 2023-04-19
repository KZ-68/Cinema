<?php

class Casting {
    private array $_films;
    private array $_roles;
    private array $_actors;

    public function __construct() {
        $this->_films = [];
        $this->_roles = [];
        $this->_actors = [];
    }

    public function addFilmsCasting(Film $film) {
        $this->_films[] = $film;
    }

    public function addRolesCasting(Rôle $role) {
        $this->_roles[] = $role;
    }

    public function addActeursCasting(Acteur $actor) {
        $this->_actors[] = $actor;
    }

    public function afficherFilms(Film $filmCasting, Rôle $roleCasting, Acteur $actorCasting, Rôle $roleCasting2, Acteur $actorCasting2) {
        $result = "";
        foreach ($this->_films as $film) {
            $result = "<p>Dans le film ".$filmCasting->getTitle().", ".$roleCasting->getCharacterName()." à été incarné par ".$actorCasting->getNomComplet().", <br/>
            ".$roleCasting2->getCharacterName()." à été incarné par ".$actorCasting2->getNomComplet()."</p>";
        }
        return $result;
    }

    public function afficherActeurRole(Acteur $actorRole) {
        $result = "";
        foreach ($this->_actors as $actorCasting) {
            $result .= "".$actorRole->getNomComplet()."";
        }
        return $result;
    }

}

