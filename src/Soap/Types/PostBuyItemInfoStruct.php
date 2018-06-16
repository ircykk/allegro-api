<?php

namespace Ircykk\AllegroApi;

class PostBuyItemInfoStruct
{

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $itemPostBuyFormInfo
     */
    protected $itemPostBuyFormInfo = null;

    /**
     * @param int $itemId
     * @param int $itemPostBuyFormInfo
     */
    public function __construct($itemId = null, $itemPostBuyFormInfo = null)
    {
      $this->itemId = $itemId;
      $this->itemPostBuyFormInfo = $itemPostBuyFormInfo;
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
     * @return \Ircykk\AllegroApi\PostBuyItemInfoStruct
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemPostBuyFormInfo()
    {
      return $this->itemPostBuyFormInfo;
    }

    /**
     * @param int $itemPostBuyFormInfo
     * @return \Ircykk\AllegroApi\PostBuyItemInfoStruct
     */
    public function setItemPostBuyFormInfo($itemPostBuyFormInfo)
    {
      $this->itemPostBuyFormInfo = $itemPostBuyFormInfo;
      return $this;
    }

}
