<?php

namespace Ircykk\AllegroApi;

class doFinishItemResponse
{

    /**
     * @var int $finishValue
     */
    protected $finishValue = null;

    /**
     * @param int $finishValue
     */
    public function __construct($finishValue = null)
    {
      $this->finishValue = $finishValue;
    }

    /**
     * @return int
     */
    public function getFinishValue()
    {
      return $this->finishValue;
    }

    /**
     * @param int $finishValue
     * @return \Ircykk\AllegroApi\doFinishItemResponse
     */
    public function setFinishValue($finishValue)
    {
      $this->finishValue = $finishValue;
      return $this;
    }

}
