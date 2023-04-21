<?php

class Personne {
    // Attributs
    protected string $_firstname;
    protected string $_lastname;
    protected string $_sex;
    protected DateTime $_dateBirth;
    
    // Constructeur
    public function __construct(string $firstname, string $lastname, string $sex, string $dateBirth ) {
        $this->_firstname = $firstname;
        $this->_lastname = $lastname;
        $this->_sex = $sex;
        $this->_dateBirth = new DateTime($dateBirth);
    }

    // Getters et Setters
    public function getFirstname(): string {
        return $this->_firstname;
    }

    public function setFirstname($firstname) {
        $this->_firstname = $firstname;
    }

    public function getLastname(): string {
        return $this->_lastname;
    }

    public function setLastname($lastname) {
        $this->_lastname = $lastname;
    }

    public function getSex(): string {
        return $this->_sex;
    }

    public function setSex($sex) {
        $this->_sex = $sex;
    }

    public function getDateBirth():string {
        return $this->_dateBirth;
    }

    public function setDateBirth($dateBirth) {
        $this->_dateBirth = new DateTime($dateBirth);
    }
} 