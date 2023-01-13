<?php
class Movie {
    private $title;
    private $genre;
    private $actors;
    private $director;

    function __construct($_title, $_genre, $_actors, $_director)
    {
        $this-> setTitle($_title);
        $this-> setGenre($_genre);
        $this-> setActors($_actors);
        $this-> setDirector($_director);
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($_title)
    {
        $this->title = $_title;

        return $this;
    }

    /**
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($_genre)
    {
        $this->genre = $_genre;

        return $this;
    }

    /**
     * Get the value of actors
     */ 
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Set the value of actors
     *
     * @return  self
     */ 
    public function setActors($_actors)
    {
        $this->actors = $_actors;

        return $this;
    }

    /**
     * Get the value of director
     */ 
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set the value of director
     *
     * @return  self
     */ 
    public function setDirector($_director)
    {
        $this->director = $_director;

        return $this;
    }
}