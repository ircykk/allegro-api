<?php

namespace Ircykk\AllegroApi;

class RangeFloatValueStruct
{

    /**
     * @var float $fvalueRangeFloatMin
     */
    protected $fvalueRangeFloatMin = null;

    /**
     * @var float $fvalueRangeFloatMax
     */
    protected $fvalueRangeFloatMax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getFvalueRangeFloatMin()
    {
      return $this->fvalueRangeFloatMin;
    }

    /**
     * @param float $fvalueRangeFloatMin
     * @return \Ircykk\AllegroApi\RangeFloatValueStruct
     */
    public function setFvalueRangeFloatMin($fvalueRangeFloatMin)
    {
      $this->fvalueRangeFloatMin = $fvalueRangeFloatMin;
      return $this;
    }

    /**
     * @return float
     */
    public function getFvalueRangeFloatMax()
    {
      return $this->fvalueRangeFloatMax;
    }

    /**
     * @param float $fvalueRangeFloatMax
     * @return \Ircykk\AllegroApi\RangeFloatValueStruct
     */
    public function setFvalueRangeFloatMax($fvalueRangeFloatMax)
    {
      $this->fvalueRangeFloatMax = $fvalueRangeFloatMax;
      return $this;
    }

}
