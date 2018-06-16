<?php

namespace Ircykk\AllegroApi;

class DoSetFreeDeliveryAmountRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $activeFlag
     */
    protected $activeFlag = null;

    /**
     * @var float $freeDeliveryAmount
     */
    protected $freeDeliveryAmount = null;

    /**
     * @param string $sessionId
     * @param int $activeFlag
     * @param float $freeDeliveryAmount
     */
    public function __construct($sessionId = null, $activeFlag = null, $freeDeliveryAmount = null)
    {
      $this->sessionId = $sessionId;
      $this->activeFlag = $activeFlag;
      $this->freeDeliveryAmount = $freeDeliveryAmount;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \Ircykk\AllegroApi\DoSetFreeDeliveryAmountRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getActiveFlag()
    {
      return $this->activeFlag;
    }

    /**
     * @param int $activeFlag
     * @return \Ircykk\AllegroApi\DoSetFreeDeliveryAmountRequest
     */
    public function setActiveFlag($activeFlag)
    {
      $this->activeFlag = $activeFlag;
      return $this;
    }

    /**
     * @return float
     */
    public function getFreeDeliveryAmount()
    {
      return $this->freeDeliveryAmount;
    }

    /**
     * @param float $freeDeliveryAmount
     * @return \Ircykk\AllegroApi\DoSetFreeDeliveryAmountRequest
     */
    public function setFreeDeliveryAmount($freeDeliveryAmount)
    {
      $this->freeDeliveryAmount = $freeDeliveryAmount;
      return $this;
    }

}
