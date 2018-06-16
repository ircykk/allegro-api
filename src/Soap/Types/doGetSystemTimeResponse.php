<?php

namespace Ircykk\AllegroApi;

class doGetSystemTimeResponse
{

    /**
     * @var int $serverTime
     */
    protected $serverTime = null;

    /**
     * @param int $serverTime
     */
    public function __construct($serverTime = null)
    {
      $this->serverTime = $serverTime;
    }

    /**
     * @return int
     */
    public function getServerTime()
    {
      return $this->serverTime;
    }

    /**
     * @param int $serverTime
     * @return \Ircykk\AllegroApi\doGetSystemTimeResponse
     */
    public function setServerTime($serverTime)
    {
      $this->serverTime = $serverTime;
      return $this;
    }

}
