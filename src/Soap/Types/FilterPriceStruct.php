<?php

namespace Ircykk\AllegroApi;

class FilterPriceStruct
{

    /**
     * @var float $filterPriceFrom
     */
    protected $filterPriceFrom = null;

    /**
     * @var float $filterPriceTo
     */
    protected $filterPriceTo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getFilterPriceFrom()
    {
      return $this->filterPriceFrom;
    }

    /**
     * @param float $filterPriceFrom
     * @return \Ircykk\AllegroApi\FilterPriceStruct
     */
    public function setFilterPriceFrom($filterPriceFrom)
    {
      $this->filterPriceFrom = $filterPriceFrom;
      return $this;
    }

    /**
     * @return float
     */
    public function getFilterPriceTo()
    {
      return $this->filterPriceTo;
    }

    /**
     * @param float $filterPriceTo
     * @return \Ircykk\AllegroApi\FilterPriceStruct
     */
    public function setFilterPriceTo($filterPriceTo)
    {
      $this->filterPriceTo = $filterPriceTo;
      return $this;
    }

}
