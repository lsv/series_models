<?php
namespace Series\Models\Tests;

use Series\Models\Link;

class LinkTest extends AbstractTest
{

    public function getClass()
    {
        return new Link();
    }

    /**
     * @return array
     */
    public function settersProvider()
    {
        return [
            ['setUrl', 'getUrl', 'url'],
            ['setName', 'getName', 'name'],
        ];
    }
}
 