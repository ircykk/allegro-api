<?php

namespace Ircykk\AllegroApi;

class ItemCatList
{

    /**
     * @var int $catLevel
     */
    protected $catLevel = null;

    /**
     * @var int $catId
     */
    protected $catId = null;

    /**
     * @var string $catName
     */
    protected $catName = null;

    /**
     * @param int $catLevel
     * @param int $catId
     * @param string $catName
     */
    public function __construct($catLevel = null, $catId = null, $catName = null)
    {
      $this->catLevel = $catLevel;
      $this->catId = $catId;
      $this->catName = $catName;
    }

    /**
     * @return int
     */
    public function getCatLevel()
    {
      return $this->catLevel;
    }

    /**
     * @param int $catLevel
     * @return \Ircykk\AllegroApi\ItemCatList
     */
    public function setCatLevel($catLevel)
    {
      $this->catLevel = $catLevel;
      return $this;
    }

    /**
     * @return int
     */
    public function getCatId()
    {
      return $this->catId;
    }

    /**
     * @param int $catId
     * @return \Ircykk\AllegroApi\ItemCatList
     */
    public function setCatId($catId)
    {
      $this->catId = $catId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCatName()
    {
      return $this->catName;
    }

    /**
     * @param string $catName
     * @return \Ircykk\AllegroApi\ItemCatList
     */
    public function setCatName($catName)
    {
      $this->catName = $catName;
      return $this;
    }

}
