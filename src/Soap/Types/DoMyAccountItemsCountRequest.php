<?php

namespace Ircykk\AllegroApi;

class DoMyAccountItemsCountRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var string $accountType
     */
    protected $accountType = null;

    /**
     * @var ArrayOfLong $itemsArray
     */
    protected $itemsArray = null;

    /**
     * @param string $sessionHandle
     * @param string $accountType
     * @param ArrayOfLong $itemsArray
     */
    public function __construct($sessionHandle = null, $accountType = null, $itemsArray = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->accountType = $accountType;
      $this->itemsArray = $itemsArray;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \Ircykk\AllegroApi\DoMyAccountItemsCountRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
      return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return \Ircykk\AllegroApi\DoMyAccountItemsCountRequest
     */
    public function setAccountType($accountType)
    {
      $this->accountType = $accountType;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemsArray()
    {
      return $this->itemsArray;
    }

    /**
     * @param ArrayOfLong $itemsArray
     * @return \Ircykk\AllegroApi\DoMyAccountItemsCountRequest
     */
    public function setItemsArray($itemsArray)
    {
      $this->itemsArray = $itemsArray;
      return $this;
    }

}
