<?php

class Rôle {
    private string $_characterName;
    private Casting $_casting;


    public function __construct(string $characterName, Casting $casting) {
        $this->_characterName = $characterName;
        $this->_casting = $casting;
        $this->_casting->addRolesCasting($this);
    }
    
    public function __toString() {
        return "<h3>Acteurs pour le rôle de ".$this->_characterName." :</h3>";
    }

    public function afficherActeur(Acteur $actorRole) {
        $result = "";
        foreach ($this->_casting as $actorCasting) {
            $result .= "".$actorRole->getNomComplet()."";
        }
        return $result;
    }

    public function getCharacterName() {
        return $this->_characterName;
    }

    public function set_characterName($characterName) {
        $this->_characterName = $characterName;
    }
}