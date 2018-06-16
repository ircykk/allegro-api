<?php

namespace Ircykk\AllegroApi;

class doNewAuctionExtResponse
{

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var string $itemInfo
     */
    protected $itemInfo = null;

    /**
     * @var int $itemIsAllegroStandard
     */
    protected $itemIsAllegroStandard = null;

    /**
     * @param int $itemId
     * @param string $itemInfo
     * @param int $itemIsAllegroStandard
     */
    public function __construct($itemId = null, $itemInfo = null, $itemIsAllegroStandard = null)
    {
      $this->itemId = $itemId;
      $this->itemInfo = $itemInfo;
      $this->itemIsAllegroStandard = $itemIsAllegroStandard;
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
     * @return \Ircykk\AllegroApi\doNewAuctionExtResponse
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemInfo()
    {
      return $this->itemInfo;
    }

    /**
     * @param string $itemInfo
     * @return \Ircykk\AllegroApi\doNewAuctionExtResponse
     */
    public function setItemInfo($itemInfo)
    {
      $this->itemInfo = $itemInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemIsAllegroStandard()
    {
      return $this->itemIsAllegroStandard;
    }

    /**
     * @param int $itemIsAllegroStandard
     * @return \Ircykk\AllegroApi\doNewAuctionExtResponse
     */
    public function setItemIsAllegroStandard($itemIsAllegroStandard)
    {
      $this->itemIsAllegroStandard = $itemIsAllegroStandard;
      return $this;
    }

}
