<?php

namespace Ircykk\AllegroApi;

class RangeDateValueStruct
{

    /**
     * @var string $fvalueRangeDateMin
     */
    protected $fvalueRangeDateMin = null;

    /**
     * @var string $fvalueRangeDateMax
     */
    protected $fvalueRangeDateMax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFvalueRangeDateMin()
    {
      return $this->fvalueRangeDateMin;
    }

    /**
     * @param string $fvalueRangeDateMin
     * @return \Ircykk\AllegroApi\RangeDateValueStruct
     */
    public function setFvalueRangeDateMin($fvalueRangeDateMin)
    {
      $this->fvalueRangeDateMin = $fvalueRangeDateMin;
      return $this;
    }

    /**
     * @return string
     */
    public function getFvalueRangeDateMax()
    {
      return $this->fvalueRangeDateMax;
    }

    /**
     * @param string $fvalueRangeDateMax
     * @return \Ircykk\AllegroApi\RangeDateValueStruct
     */
    public function setFvalueRangeDateMax($fvalueRangeDateMax)
    {
      $this->fvalueRangeDateMax = $fvalueRangeDateMax;
      return $this;
    }

}
