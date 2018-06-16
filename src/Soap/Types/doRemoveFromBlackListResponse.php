<?php

namespace Ircykk\AllegroApi;

class doRemoveFromBlackListResponse
{

    /**
     * @var ArrayOfBlacklistresstruct $blackListResult
     */
    protected $blackListResult = null;

    /**
     * @param ArrayOfBlacklistresstruct $blackListResult
     */
    public function __construct($blackListResult = null)
    {
      $this->blackListResult = $blackListResult;
    }

    /**
     * @return ArrayOfBlacklistresstruct
     */
    public function getBlackListResult()
    {
      return $this->blackListResult;
    }

    /**
     * @param ArrayOfBlacklistresstruct $blackListResult
     * @return \Ircykk\AllegroApi\doRemoveFromBlackListResponse
     */
    public function setBlackListResult($blackListResult)
    {
      $this->blackListResult = $blackListResult;
      return $this;
    }

}
