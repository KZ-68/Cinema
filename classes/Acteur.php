<?php

class Acteur extends Personne {
    // Attribut
    private array $_casting;

    // Constructeur
    public function __construct(string $firstname, string $lastname, string $sex, string $dateBirth) {
        parent::__construct($firstname, $lastname, $sex, $dateBirth);
            $this->_casting = [];
    }

    // Méthodes
    public function addCasting(Casting $casting) {
        $this->_casting[] = $casting; // array push de Casting
    }

    public function __toString() {
        return "".$this->getNomComplet()."";
    }

    public function displayFilmography() {
        $result = "<h3>Les films de l'acteur $this :</h3>";
        foreach ($this->_casting as $casting) {
            $result .= $casting->getMovie(). ", ";
        }
        return $result;
    }

    public function getNomComplet() {
        return "".$this->_firstname." ".$this->_lastname."";
    }
}