<?php

/**
 * Movie
 * Defines a movie
 * 
 * @author Gaetano Frascolla
 */
class Movie
{
    private $name;
    private $genre;
    private $duration;
    private $staff;

    /**
     * __construct
     *
     * @param  string $_name Movie name
     * @param  array $_genre Movie genre
     * @param  int $_duration Movie duration
     * @param  string $_staff Movie staff
     */
    public function __construct(string $_name, array $_genre, int $_duration, string $_staff)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->duration = $_duration;
        $this->staff = $_staff;
    }

    /**
     * Get movie info
     * Return Movie's name and duration
     *
     * @return string
     */
    public function get_movie_info()
    {
        return "name: {$this->name} - duration: {$this->duration} minuti";
    }
    /**
     * Get movie name
     * Return Movie's name
     *
     * @return string
     */
    public function get_name()
    {
        return $this->name;
    }
    /**
     * Get genre name as string
     * Transform genre array as string
     *
     * @return string
     */
    public function get_genre_name_as_string()
    {
        $genres = [];

        foreach ($this->genre as $genre) {
            array_push($genres, $genre->name);
        }

        return implode(', ', $genres);
    }
}
