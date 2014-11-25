<?php
namespace Series\Models;

class Link
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $url;

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
     * @return Link
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets the Url
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the Url
     * @param string $url
     * @return Link
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

}
 