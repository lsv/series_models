<?php
namespace Series\Models\Tests;

use Series\Models\Genre;
use Series\Models\Link;
use Series\Models\Show;

class ShowTest extends AbstractTest
{

    public function getClass()
    {
        return new Show();
    }

    /**
     * @return array
     */
    public function settersProvider()
    {
        return [
            ['setId', 'getId', 123],
            ['setName', 'getName', 'name'],
            ['setCountry', 'getCountry', 'EU'],
            ['setNumberOfSeasons', 'getNumberOfSeasons', 5],
            ['setRunning', 'isRunning', true],
            ['setRunning', 'isRunning', false],
        ];
    }

    /**
     * @dataProvider dateProvider
     *
     * @param \DateTime $input
     * @param string $output
     */
    public function test_startdate($input, $output)
    {
        $obj = $this->getClass();
        $obj->setStartedDate($input);
        if ($input !== null) {
            $this->assertInstanceOf('\DateTime', $obj->getStartedDate());
            $this->assertEquals($output, $obj->getStartedDate()->format('Y-m-d'));
        } else {
            $this->assertNull($obj->getStartedDate());
        }
    }

    /**
     * @dataProvider dateProvider
     *
     * @param \DateTime $input
     * @param string $output
     */
    public function test_endeddate($input, $output)
    {
        $obj = $this->getClass();
        $obj->setEndedDate($input);
        if ($input !== null) {
            $this->assertInstanceOf('\DateTime', $obj->getEndedDate());
            $this->assertEquals($output, $obj->getEndedDate()->format('Y-m-d'));
        } else {
            $this->assertNull($obj->getEndedDate());
        }
    }

    public function test_links()
    {
        $obj = $this->getClass();

        $link = new Link();
        $link
            ->setUrl('url')
            ->setName('name')
        ;

        $obj->addLink($link);
        $obj->setLinks([$link]);
        $this->assertEquals(2, count($obj->getLinks()));

        foreach($obj->getLinks() as $link) {
            $this->assertInstanceOf('Series\Models\Link', $link);
        }
    }

    public function test_throws_exception_on_wrong_link()
    {
        $this->setExpectedException('\Exception');
        $obj = $this->getClass();
        $obj->setLinks(['link1', 'link2']);
    }

    public function test_episodes()
    {
        $obj = $this->getClass();

        $episode1 = $this->getEpisode('name1', 1, 1);
        $episode2 = $this->getEpisode('name1', 1, 2);

        $obj->addEpisode($episode1);
        $obj->setEpisodes([$episode1, $episode2]);
        $this->assertEquals(3, count($obj->getEpisodes()));

        foreach($obj->getGenres() as $ep) {
            $this->assertInstanceOf('Series\Models\Episode', $ep);
        }
    }

    public function test_throws_exception_on_wrong_episode()
    {
        $this->setExpectedException('\Exception');
        $obj = $this->getClass();
        $obj->setEpisodes(['ep1', 'ep2']);
    }

    public function test_genres()
    {
        $obj = $this->getClass();

        $genre = new Genre();
        $genre
            ->setGenre('Action')
        ;

        $obj->addGenre($genre);
        $obj->setGenres([$genre]);
        $this->assertEquals(2, count($obj->getGenres()));

        foreach($obj->getGenres() as $genre) {
            $this->assertInstanceOf('Series\Models\Genre', $genre);
        }
    }

    public function test_throws_exception_on_wrong_genre()
    {
        $this->setExpectedException('\Exception');
        $obj = $this->getClass();
        $obj->setGenres(['genre1', 'genre2']);
    }
}
 