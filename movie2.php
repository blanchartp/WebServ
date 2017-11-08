<?php

class Movie
{
    public $name = null;
    public $description ='Great Movie! Very cool';
    public $time ='4 hours and 50 minuts' ;
    public $date ='10.10.2017';
    
    public function __construct($name = "")
    {
        $this->name = $name;
        $this->description = $description;
        $this->time = $time;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name = "")
    {
        $this->description = $description;
    }
    
     public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription()
    {
        $this->name = $name;
    }
    
    public function getTime()
    {
        return $this->time;
    }
    
    public function setTime()
    {
        $this->time = $time;
    }
}

$movie = new Movie();
echo $movie->getName();
$movie -> setName("Mega Shark 52");
echo $movie->getName();


