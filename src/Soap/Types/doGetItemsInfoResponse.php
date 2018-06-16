<?php

namespace Ircykk\AllegroApi;

class doGetItemsInfoResponse
{

    /**
     * @var ArrayOfIteminfostruct $arrayItemListInfo
     */
    protected $arrayItemListInfo = null;

    /**
     * @var ArrayOfLong $arrayItemsNotFound
     */
    protected $arrayItemsNotFound = null;

    /**
     * @var ArrayOfLong $arrayItemsAdminKilled
     */
    protected $arrayItemsAdminKilled = null;

    /**
     * @param ArrayOfIteminfostruct $arrayItemListInfo
     * @param ArrayOfLong $arrayItemsNotFound
     * @param ArrayOfLong $arrayItemsAdminKilled
     */
    public function __construct($arrayItemListInfo = null, $arrayItemsNotFound = null, $arrayItemsAdminKilled = null)
    {
      $this->arrayItemListInfo = $arrayItemListInfo;
      $this->arrayItemsNotFound = $arrayItemsNotFound;
      $this->arrayItemsAdminKilled = $arrayItemsAdminKilled;
    }

    /**
     * @return ArrayOfIteminfostruct
     */
    public function getArrayItemListInfo()
    {
      return $this->arrayItemListInfo;
    }

    /**
     * @param ArrayOfIteminfostruct $arrayItemListInfo
     * @return \Ircykk\AllegroApi\doGetItemsInfoResponse
     */
    public function setArrayItemListInfo($arrayItemListInfo)
    {
      $this->arrayItemListInfo = $arrayItemListInfo;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getArrayItemsNotFound()
    {
      return $this->arrayItemsNotFound;
    }

    /**
     * @param ArrayOfLong $arrayItemsNotFound
     * @return \Ircykk\AllegroApi\doGetItemsInfoResponse
     */
    public function setArrayItemsNotFound($arrayItemsNotFound)
    {
      $this->arrayItemsNotFound = $arrayItemsNotFound;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getArrayItemsAdminKilled()
    {
      return $this->arrayItemsAdminKilled;
    }

    /**
     * @param ArrayOfLong $arrayItemsAdminKilled
     * @return \Ircykk\AllegroApi\doGetItemsInfoResponse
     */
    public function setArrayItemsAdminKilled($arrayItemsAdminKilled)
    {
      $this->arrayItemsAdminKilled = $arrayItemsAdminKilled;
      return $this;
    }

}
