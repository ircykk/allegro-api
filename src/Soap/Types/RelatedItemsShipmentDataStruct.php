<?php

namespace Ircykk\AllegroApi;

class RelatedItemsShipmentDataStruct
{

    /**
     * @var ArrayOfSellershipmentdatastruct $sellerShipmentData
     */
    protected $sellerShipmentData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfSellershipmentdatastruct
     */
    public function getSellerShipmentData()
    {
      return $this->sellerShipmentData;
    }

    /**
     * @param ArrayOfSellershipmentdatastruct $sellerShipmentData
     * @return \Ircykk\AllegroApi\RelatedItemsShipmentDataStruct
     */
    public function setSellerShipmentData($sellerShipmentData)
    {
      $this->sellerShipmentData = $sellerShipmentData;
      return $this;
    }

}
