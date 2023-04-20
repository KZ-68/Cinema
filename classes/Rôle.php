<?php

class Rôle {
    // Attributs
    private string $_characterName;
    private array $_casting;

    // Constructeur
    public function __construct(string $characterName) {
        $this->_characterName = $characterName;
        $this->_casting = [];
    }

    // Méthodes
    public function addCasting(Casting $casting) {
        $this->_casting[] = $casting; // array push de Casting
    }

    public function __toString() {
        return $this->_characterName;
    }

    public function displayActorRole() {
        $result = "<h3> Les acteurs ayant joué le rôle de $this :</h3>";
        foreach ($this->_casting as $casting) {
            $result .= $casting->getActor(). ", ";
        }
        return $result;
    }

    public function getCharacterName() {
        return $this->_characterName;
    }

    public function setCharacterName($characterName) {
        $this->_characterName = $characterName;
    }

    public function getActor() {
        $this->_actor = $actor;
    }

}
