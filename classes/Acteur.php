<?php

class Acteur extends Personne {
    private Casting $_casting;

    public function __construct(string $firstname, string $lastname, string $sex, string $dateBirth, Casting $casting) {
        parent::__construct($firstname, $lastname, $sex, $dateBirth);
            $this->_casting = $casting;
            $this->_casting->addActeursCasting($this);
    }

    public function getNomComplet() {
        return "".$this->_firstname." ".$this->_lastname."";
    }
}