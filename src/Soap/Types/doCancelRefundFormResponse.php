<?php

namespace Ircykk\AllegroApi;

class doCancelRefundFormResponse
{

    /**
     * @var boolean $cancellationResult
     */
    protected $cancellationResult = null;

    /**
     * @param boolean $cancellationResult
     */
    public function __construct($cancellationResult = null)
    {
      $this->cancellationResult = $cancellationResult;
    }

    /**
     * @return boolean
     */
    public function getCancellationResult()
    {
      return $this->cancellationResult;
    }

    /**
     * @param boolean $cancellationResult
     * @return \Ircykk\AllegroApi\doCancelRefundFormResponse
     */
    public function setCancellationResult($cancellationResult)
    {
      $this->cancellationResult = $cancellationResult;
      return $this;
    }

}
