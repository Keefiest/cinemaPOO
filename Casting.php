<?php

class Casting{
    
    private Film $film;
    private Acteur $acteur;
    private Role $role;

    public function __construct(){
        $this->film->addCasting($this);
        $this->acteur= [];
        $this->acteur->addActeur();
        $this->role= [];
        $this->role->addRole();
    }



    public function __toString(){
        return $this->films." :".$this->acteurs."(".$this->roles.")";
    }
}


?>