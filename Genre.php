<?php

class Genre {
    
    protected $name;
    protected $films;

    public function __construct($name){
        $this->name=$name;
        $this->films=[];

    }

    public function getName(){
        return $this->name;
    }

    public function addFilm($film){
        $this->films[]= $film;
    }

    public function showGenrelist(){
        echo "<h2>Les Films du genre $this->name:</h2><br>";
        foreach($this->films as $film){
            echo $film."<br>";
        }
    }

}




?>