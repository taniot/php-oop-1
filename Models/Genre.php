<?php


/**
 * Genre
 * 
 * @author Gaetano Frascolla
 */
class Genre
{
    public $name;

    /**
     * __construct
     *
     * @param  string $_name Genre name
     */
    public function __construct(string $_name)
    {
        $this->name = $_name;
    }
}
