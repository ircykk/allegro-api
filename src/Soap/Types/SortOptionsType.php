<?php

namespace Ircykk\AllegroApi;

class SortOptionsType
{

    /**
     * @var string $sortType
     */
    protected $sortType = null;

    /**
     * @var string $sortOrder
     */
    protected $sortOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSortType()
    {
      return $this->sortType;
    }

    /**
     * @param string $sortType
     * @return \Ircykk\AllegroApi\SortOptionsType
     */
    public function setSortType($sortType)
    {
      $this->sortType = $sortType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSortOrder()
    {
      return $this->sortOrder;
    }

    /**
     * @param string $sortOrder
     * @return \Ircykk\AllegroApi\SortOptionsType
     */
    public function setSortOrder($sortOrder)
    {
      $this->sortOrder = $sortOrder;
      return $this;
    }

}
