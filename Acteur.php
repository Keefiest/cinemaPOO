<?php
Class Acteur extends Personne{

    private Film $films;

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
    public function addActeur($acteur){
        $this->acteurs[]=$acteur; 
    }
    
    public function showActorfilms(){
        echo "<h2>$this->firstname $this->name est acteur dans :</h2><br>";
        foreach($this->films as $film){
            echo $film."<br>";
        }
    
    }






}
?>