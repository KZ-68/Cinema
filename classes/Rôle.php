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
        return "<h3> Les acteurs ayant joué le rôle de ".$this->_characterName." :</h3>";
    }

    public function getCharacterName() {
        return $this->_characterName;
    }

    public function set_characterName($characterName) {
        $this->_characterName = $characterName;
    }
}