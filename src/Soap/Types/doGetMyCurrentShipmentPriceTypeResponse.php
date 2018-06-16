<?php

namespace Ircykk\AllegroApi;

class doGetMyCurrentShipmentPriceTypeResponse
{

    /**
     * @var int $shipmentPriceTypeId
     */
    protected $shipmentPriceTypeId = null;

    /**
     * @param int $shipmentPriceTypeId
     */
    public function __construct($shipmentPriceTypeId = null)
    {
      $this->shipmentPriceTypeId = $shipmentPriceTypeId;
    }

    /**
     * @return int
     */
    public function getShipmentPriceTypeId()
    {
      return $this->shipmentPriceTypeId;
    }

    /**
     * @param int $shipmentPriceTypeId
     * @return \Ircykk\AllegroApi\doGetMyCurrentShipmentPriceTypeResponse
     */
    public function setShipmentPriceTypeId($shipmentPriceTypeId)
    {
      $this->shipmentPriceTypeId = $shipmentPriceTypeId;
      return $this;
    }

}
