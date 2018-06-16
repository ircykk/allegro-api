<?php

namespace Ircykk\AllegroApi;

class DoGetFilledPostBuyFormsRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $paymentType
     */
    protected $paymentType = null;

    /**
     * @var int $userRole
     */
    protected $userRole = null;

    /**
     * @var int $fillingTimeFrom
     */
    protected $fillingTimeFrom = null;

    /**
     * @var int $fillingTimeTo
     */
    protected $fillingTimeTo = null;

    /**
     * @param string $sessionId
     * @param int $paymentType
     * @param int $userRole
     * @param int $fillingTimeFrom
     * @param int $fillingTimeTo
     */
    public function __construct($sessionId = null, $paymentType = null, $userRole = null, $fillingTimeFrom = null, $fillingTimeTo = null)
    {
      $this->sessionId = $sessionId;
      $this->paymentType = $paymentType;
      $this->userRole = $userRole;
      $this->fillingTimeFrom = $fillingTimeFrom;
      $this->fillingTimeTo = $fillingTimeTo;
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
     * @return \Ircykk\AllegroApi\DoGetFilledPostBuyFormsRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentType()
    {
      return $this->paymentType;
    }

    /**
     * @param int $paymentType
     * @return \Ircykk\AllegroApi\DoGetFilledPostBuyFormsRequest
     */
    public function setPaymentType($paymentType)
    {
      $this->paymentType = $paymentType;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserRole()
    {
      return $this->userRole;
    }

    /**
     * @param int $userRole
     * @return \Ircykk\AllegroApi\DoGetFilledPostBuyFormsRequest
     */
    public function setUserRole($userRole)
    {
      $this->userRole = $userRole;
      return $this;
    }

    /**
     * @return int
     */
    public function getFillingTimeFrom()
    {
      return $this->fillingTimeFrom;
    }

    /**
     * @param int $fillingTimeFrom
     * @return \Ircykk\AllegroApi\DoGetFilledPostBuyFormsRequest
     */
    public function setFillingTimeFrom($fillingTimeFrom)
    {
      $this->fillingTimeFrom = $fillingTimeFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getFillingTimeTo()
    {
      return $this->fillingTimeTo;
    }

    /**
     * @param int $fillingTimeTo
     * @return \Ircykk\AllegroApi\DoGetFilledPostBuyFormsRequest
     */
    public function setFillingTimeTo($fillingTimeTo)
    {
      $this->fillingTimeTo = $fillingTimeTo;
      return $this;
    }

}
