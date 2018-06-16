<?php

namespace Ircykk\AllegroApi;

class DurationInfoStruct
{

    /**
     * @var int $durationType
     */
    protected $durationType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getDurationType()
    {
      return $this->durationType;
    }

    /**
     * @param int $durationType
     * @return \Ircykk\AllegroApi\DurationInfoStruct
     */
    public function setDurationType($durationType)
    {
      $this->durationType = $durationType;
      return $this;
    }

}
