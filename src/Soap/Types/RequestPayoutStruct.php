<?php

namespace Ircykk\AllegroApi;

class RequestPayoutStruct
{

    /**
     * @var int $payoutId
     */
    protected $payoutId = null;

    /**
     * @var float $payoutAmount
     */
    protected $payoutAmount = null;

    /**
     * @var int $payoutTime
     */
    protected $payoutTime = null;

    /**
     * @param int $payoutId
     * @param float $payoutAmount
     * @param int $payoutTime
     */
    public function __construct($payoutId = null, $payoutAmount = null, $payoutTime = null)
    {
      $this->payoutId = $payoutId;
      $this->payoutAmount = $payoutAmount;
      $this->payoutTime = $payoutTime;
    }

    /**
     * @return int
     */
    public function getPayoutId()
    {
      return $this->payoutId;
    }

    /**
     * @param int $payoutId
     * @return \Ircykk\AllegroApi\RequestPayoutStruct
     */
    public function setPayoutId($payoutId)
    {
      $this->payoutId = $payoutId;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayoutAmount()
    {
      return $this->payoutAmount;
    }

    /**
     * @param float $payoutAmount
     * @return \Ircykk\AllegroApi\RequestPayoutStruct
     */
    public function setPayoutAmount($payoutAmount)
    {
      $this->payoutAmount = $payoutAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayoutTime()
    {
      return $this->payoutTime;
    }

    /**
     * @param int $payoutTime
     * @return \Ircykk\AllegroApi\RequestPayoutStruct
     */
    public function setPayoutTime($payoutTime)
    {
      $this->payoutTime = $payoutTime;
      return $this;
    }

}
