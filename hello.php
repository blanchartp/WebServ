<?php

class Movie
{
    public $name = 'Mega Shark';
    public $description ='Great Movie! Very cool';
    public $time ='4 hours and 50 minuts' ;
    public $date ='10.10.2017';
    
    function aMovieFunc()
    {
        print ' Name: ' .  $this->name . "\n";
        print ' Description: ' .  $this->description ."\n" ;
        print ' Time: ' .  $this->time ."\n";
        print ' Release Date: ' .  $this->date ."\n" ;
    }
}

$movie = new Movie();
$movie -> aMovieFunc();

