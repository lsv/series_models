<?php
namespace Series\Models;

use Doctrine\Common\Collections\ArrayCollection;

class Episode
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $episodenumber;

    /**
     * @var int
     */
    public $season;

    /**
     * @var \DateTime
     */
    public $airdate;

    /**
     * @var Link[]
     */
    protected $links;

    public function __construct()
    {
        $this->links = new ArrayCollection();
    }

    /**
     * Gets the Name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the Name
     * @param string $name
     * @return Episode
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets the Episodenumber
     * @return int
     */
    public function getEpisodenumber()
    {
        return $this->episodenumber;
    }

    /**
     * Sets the Episodenumber
     * @param int $episodenumber
     * @return Episode
     */
    public function setEpisodenumber($episodenumber)
    {
        $this->episodenumber = $episodenumber;
        return $this;
    }

    /**
     * Gets the Season
     * @return int
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Sets the Season
     * @param int $season
     * @return Episode
     */
    public function setSeason($season)
    {
        $this->season = $season;
        return $this;
    }

    /**
     * Gets the Airdate
     * @return \DateTime
     */
    public function getAirdate()
    {
        return $this->airdate;
    }

    /**
     * Sets the Airdate
     * @param \DateTime $airdate
     * @return Episode
     */
    public function setAirdate(\DateTime $airdate = null)
    {
        $this->airdate = $airdate;
        return $this;
    }

    /**
     * Gets the Links
     * @return Link[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Add Link
     * @param Link $link
     * @return Episode
     */
    public function addLink(Link $link)
    {
        $this->links[] = $link;
        return $this;
    }

    /**
     * Sets links
     * @param array $links
     * @throws \Exception
     * @return Episode
     */
    public function setLinks(array $links)
    {
        foreach($links as $link) {
            if ($link instanceof Link) {
                $this->addLink($link);
            } else {
                throw new \Exception('Link should be a instance of "Link"');
            }
        }

        return $this;
    }

}
 