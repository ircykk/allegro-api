<?php

namespace Ircykk\AllegroApi;

class StructSellAgain
{

    /**
     * @var int $sellItemId
     */
    protected $sellItemId = null;

    /**
     * @var string $sellItemInfo
     */
    protected $sellItemInfo = null;

    /**
     * @var int $sellItemLocalId
     */
    protected $sellItemLocalId = null;

    /**
     * @param int $sellItemId
     * @param string $sellItemInfo
     * @param int $sellItemLocalId
     */
    public function __construct($sellItemId = null, $sellItemInfo = null, $sellItemLocalId = null)
    {
      $this->sellItemId = $sellItemId;
      $this->sellItemInfo = $sellItemInfo;
      $this->sellItemLocalId = $sellItemLocalId;
    }

    /**
     * @return int
     */
    public function getSellItemId()
    {
      return $this->sellItemId;
    }

    /**
     * @param int $sellItemId
     * @return \Ircykk\AllegroApi\StructSellAgain
     */
    public function setSellItemId($sellItemId)
    {
      $this->sellItemId = $sellItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellItemInfo()
    {
      return $this->sellItemInfo;
    }

    /**
     * @param string $sellItemInfo
     * @return \Ircykk\AllegroApi\StructSellAgain
     */
    public function setSellItemInfo($sellItemInfo)
    {
      $this->sellItemInfo = $sellItemInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellItemLocalId()
    {
      return $this->sellItemLocalId;
    }

    /**
     * @param int $sellItemLocalId
     * @return \Ircykk\AllegroApi\StructSellAgain
     */
    public function setSellItemLocalId($sellItemLocalId)
    {
      $this->sellItemLocalId = $sellItemLocalId;
      return $this;
    }

}
