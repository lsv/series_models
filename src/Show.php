<?php
namespace Series\Models;

use Doctrine\Common\Collections\ArrayCollection;

class Show
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var Link[]
     */
    protected $links;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var null|\DateTime
     */
    protected $starteddate;

    /**
     * @var null|\DateTime
     */
    protected $endeddate = null;

    /**
     * @var int
     */
    protected $numberOfSeasons;

    /**
     * @var bool
     */
    protected $running = true;

    /**
     * @var Genre[]
     */
    protected $genres;

    /**
     * @var Episode[]
     */
    protected $episodes;

    public function __construct()
    {
        $this->episodes = new ArrayCollection();
        $this->genres = new ArrayCollection();
        $this->links = new ArrayCollection();
    }

    /**
     * Gets the Id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the Id
     * @param int $id
     * @return Show
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
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
     * @return Show
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return Show
     */
    public function addLink(Link $link)
    {
        $this->links[] = $link;
        return $this;
    }

    /**
     * Sets links
     * @param Link[] $links
     * @throws \Exception
     * @return Show
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

    /**
     * Gets the Country
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the Country
     * @param string $country
     * @return Show
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets the Started year
     * @return \DateTime
     */
    public function getStartedDate()
    {
        return $this->starteddate;
    }

    /**
     * Sets the Started year
     * @param null|\DateTime $starteddate
     * @return Show
     */
    public function setStartedDate(\DateTime $starteddate = null)
    {
        $this->starteddate = $starteddate;
        return $this;
    }

    /**
     * Gets the Ended
     * @return \DateTime|null
     */
    public function getEndedDate()
    {
        return $this->endeddate;
    }

    /**
     * Sets the Ended
     * @param \DateTime|null $endeddate
     * @return Show
     */
    public function setEndedDate(\DateTime $endeddate = null)
    {
        $this->endeddate = $endeddate;
        return $this;
    }

    /**
     * Gets the Seasons
     * @return int
     */
    public function getNumberOfSeasons()
    {
        return $this->numberOfSeasons;
    }

    /**
     * Sets the Seasons
     * @param int $numberOfSeasons
     * @return Show
     */
    public function setNumberOfSeasons($numberOfSeasons)
    {
        $this->numberOfSeasons = $numberOfSeasons;
        return $this;
    }

    /**
     * Gets the running status
     * @return boolean
     */
    public function isRunning()
    {
        return $this->running;
    }

    /**
     * Sets the running status
     * @param bool $isRunning
     * @return Show
     */
    public function setRunning($isRunning)
    {
        $this->running = $isRunning;
        return $this;
    }

    /**
     * Gets the Genres
     * @return Genre[]
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * @param Genre $genre
     * @return Show
     */
    public function addGenre(Genre $genre)
    {
        $this->genres[] = $genre;
        return $this;
    }

    /**
     * Sets the Genres
     * @param Genre[] $genres
     * @throws \Exception
     * @return Show
     */
    public function setGenres(array $genres)
    {
        foreach($genres as $genre) {
            if ($genre instanceof Genre) {
                $this->addGenre($genre);
            } else {
                throw new \Exception('Genre should be a instance of "Genre"');
            }
        }
        return $this;
    }

    /**
     * Gets the Episodes
     * @return Show[]
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    /**
     * @param Episode $episode
     * @return Show
     */
    public function addEpisode(Episode $episode)
    {
        $this->episodes[] = $episode;
        return $this;
    }

    /**
     * Sets the Episodes
     * @param Episode[] $episodes
     * @throws \Exception
     * @return Show
     */
    public function setEpisodes(array $episodes)
    {
        foreach($episodes as $episode) {
            if ($episode instanceof Episode) {
                $this->addEpisode($episode);
            } else {
                throw new \Exception('Episode is not a instance of a episode');
            }
        }
        return $this;
    }

}
 