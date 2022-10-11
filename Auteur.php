<?php


class Auteur extends Personne{
    
    private $films;

    public function __construct($name, $firstname, $sex, $birthday){
        
        parent::__construct($name, $firstname, $sex, $birthday);
        $this->films= [];

    }


    public function getFilms(){
        return $this->films;
    }


    public function addFilm($film){ 
        $this->films[]= $film;
    }
    
    public function showFilmography(){
        echo "<h2>Les Films de $this->firstname $this->name :</h2><br>";
        foreach($this->films as $film){
            echo $film."<br>";
        }
    
        
    }
}







?>