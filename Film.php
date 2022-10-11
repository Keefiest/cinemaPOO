<?php


class Film{

    protected string $title;
    protected Auteur $author;
    protected Casting $casting;
    protected DateTime $releasedate;
    protected Genre $genre;
    protected int $duration;
    protected string $synopsis;

    public function __construct(string $title, Auteur $author, $releasedate, Genre $genre, int $duration, string $synopsis){
        $this->title= $title;
        $this->author= $author;
        $this->author->addFilm($this);
        $this->casting= [];
        $this->casting->addCasting($this);
        $this->releasedate= new DateTime($releasedate);
        $this->genre= $genre;
        $this->genre->addFilm($this);                           
        $this->duration= $duration;
        $this->synopsis= $synopsis;
    }



    public function getTitle(){
        return $this->title;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getActor(){
        return $this->actor;
    }

    public function getReleasedate(){
        return $this->releasedate;
    }

    public function getGender(){
        return $this->gender;
    }

    public function getDuration(){
        return $this->duration;
    }

    public function getSynopsis(){
        return $this->synopsis;
    }

    public function addFilm($film){
        $this->films[]=$film; 
    }

    public function addCasting(Casting $casting){
        $this->casting[]= $casting;
    }

    public function __toString(){
        return "Titre: <strong>".$this->title."</strong><br>Date de sortie: <strong>".$this->releasedate."</strong><br>Durée :<strong>".$this->duration."</strong><br>Synopsis : <strong>".$this->synopsis."</strong><br>";
    }



}





?>