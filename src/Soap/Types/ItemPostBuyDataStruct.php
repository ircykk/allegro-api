<?php

namespace Ircykk\AllegroApi;

class ItemPostBuyDataStruct
{

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var ArrayOfUserpostbuydatastruct $usersPostBuyData
     */
    protected $usersPostBuyData = null;

    /**
     * @param int $itemId
     */
    public function __construct($itemId = null)
    {
      $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return \Ircykk\AllegroApi\ItemPostBuyDataStruct
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return ArrayOfUserpostbuydatastruct
     */
    public function getUsersPostBuyData()
    {
      return $this->usersPostBuyData;
    }

    /**
     * @param ArrayOfUserpostbuydatastruct $usersPostBuyData
     * @return \Ircykk\AllegroApi\ItemPostBuyDataStruct
     */
    public function setUsersPostBuyData($usersPostBuyData)
    {
      $this->usersPostBuyData = $usersPostBuyData;
      return $this;
    }

}
