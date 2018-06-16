<?php

namespace Ircykk\AllegroApi;

class ItemImagesStruct
{

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var ArrayOfItemimagelist $itemImages
     */
    protected $itemImages = null;

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
     * @return \Ircykk\AllegroApi\ItemImagesStruct
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return ArrayOfItemimagelist
     */
    public function getItemImages()
    {
      return $this->itemImages;
    }

    /**
     * @param ArrayOfItemimagelist $itemImages
     * @return \Ircykk\AllegroApi\ItemImagesStruct
     */
    public function setItemImages($itemImages)
    {
      $this->itemImages = $itemImages;
      return $this;
    }

}
