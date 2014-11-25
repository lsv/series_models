<?php
namespace Series\Models\Tests;

use Series\Models\Genre;

class GenreTest extends AbstractTest
{

    public function getClass()
    {
        return new Genre();
    }

    /**
     * @return array
     */
    public function settersProvider()
    {
        return [
            ['setGenre', 'getGenre', 'genre'],
            ['setGenre', 'getGenre', 'genre2'],
        ];
    }
}
 