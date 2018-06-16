<?php

namespace Ircykk\AllegroApi;

class doRequestCancelBidResponse
{

    /**
     * @var int $requestValue
     */
    protected $requestValue = null;

    /**
     * @param int $requestValue
     */
    public function __construct($requestValue = null)
    {
      $this->requestValue = $requestValue;
    }

    /**
     * @return int
     */
    public function getRequestValue()
    {
      return $this->requestValue;
    }

    /**
     * @param int $requestValue
     * @return \Ircykk\AllegroApi\doRequestCancelBidResponse
     */
    public function setRequestValue($requestValue)
    {
      $this->requestValue = $requestValue;
      return $this;
    }

}
