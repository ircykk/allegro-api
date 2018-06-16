<?php

namespace Ircykk\AllegroApi;

class BidListStruct2
{

    /**
     * @var ArrayOfString $bidsArray
     */
    protected $bidsArray = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getBidsArray()
    {
      return $this->bidsArray;
    }

    /**
     * @param ArrayOfString $bidsArray
     * @return \Ircykk\AllegroApi\BidListStruct2
     */
    public function setBidsArray($bidsArray)
    {
      $this->bidsArray = $bidsArray;
      return $this;
    }

}
