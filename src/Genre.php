<?php
namespace Series\Models;

class Genre
{

    /**
     * @var string
     */
    protected $genre;

    /**
     * Gets the Genre
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets the Genre
     * @param string $genre
     * @return Genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
        return $this;
    }

}
 