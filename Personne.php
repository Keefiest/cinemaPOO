<?php

class Personne{

protected $name;
protected $firstname;
protected $sex;
protected $birthday;

public function __construct($name, $firstname, $sex, $birthday){
    
    $this->name= $name;
    $this->firstname= $firstname;
    $this->sex= $sex;
    $this->birthday= $birthday;

}

function getName(){
    return $this->name;
}

function getFirstname(){
    return $this->firstname;
}

function getSex(){
    return $this->sex;
}

function getBirthday(){
    return $this->birthday;
}

}

?>