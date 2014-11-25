<?php
namespace Series\Models\Tests;

use Series\Models\Episode;
use Series\Models\Link;

class EpisodeTest extends AbstractTest
{

    public function getClass()
    {
        return new Episode();
    }

    /**
     * @return array
     */
    public function settersProvider()
    {
        return [
            ['setName', 'getName', 'name'],
            ['setEpisodenumber', 'getEpisodenumber', 10],
            ['setSeason', 'getSeason', 2],
        ];
    }

    public function dateProvider()
    {
        return [
            ['2007-10-25', 'Y-m-d', '2007-10-25'],
            ['25-10-2007', 'd-m-Y', '2007-10-25'],
            ['07-10-25', 'y-m-d', '2007-10-25']
        ];
    }

    /**
     * @dataProvider dateProvider
     *
     * @param string $input
     * @param string $format
     * @param string $expected
     */
    public function test_airdate($input, $format, $expected)
    {
        $obj = $this->getClass();
        $obj->setAirdate(date_create_from_format($format, $input));
        $this->assertEquals($expected, $obj->getAirdate()->format('Y-m-d'));
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

}
 