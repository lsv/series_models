<?php
namespace Series\Models\Tests;

use Series\Models\Episode;

abstract class AbstractTest extends \PHPUnit_Framework_TestCase
{

    abstract public function getClass();

    /**
     * @return array
     */
    abstract public function settersProvider();

    /**
     * @dataProvider settersProvider
     */
    public function test_getters($setter, $getter, $expected)
    {
        $obj = $this->getClass();
        $obj->{$setter}($expected);
        $this->assertEquals($expected, $obj->{$getter}());
    }

    public function dateProvider()
    {
        return [
            [date_create_from_format('Y-m-d', '2007-10-25'), '2007-10-25'],
            [date_create_from_format('M/d-Y', 'Mar/10-2007'), '2007-03-10'],
            [date_create_from_format('M/d/Y', 'Mar/10/2007'), '2007-03-10'],
            [date_create_from_format('d-m-Y', '25-10-2007'), '2007-10-25'],
            [date_create_from_format('d-m-y', '25-10-07'), '2007-10-25'],
            [null, null]
        ];
    }

    /**
     * @param string $name
     * @param int $season
     * @param int $episode
     * @return Episode
     */
    protected function getEpisode($name, $season, $episode)
    {
        $ep = new Episode();
        return $ep
            ->setAirdate(date_create_from_format('Y-m-d', '2007-10-25'))
            ->setName($name)
            ->setEpisodenumber($episode)
            ->setSeason($season)
        ;
    }

}
 