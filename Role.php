<?php

class Role{

    private Film $films;
    private $roles;

    public function __construct($roles)
    {
        $this->films=[];
        $this->roles=$roles;
        
    }
    public function addFilm($film){
        $this->films[]= $film;
    }
    public function addRole($role){
        $this->roles[]=$role; 
    }
    public function showFilmRole(){
        echo "<h2>$this->firstname $this->name est acteur dans :</h2><br>";
        foreach($this->films as $film){
            echo $film."<br>";
        }
           
    }

}

?>