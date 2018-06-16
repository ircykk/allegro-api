<?php

namespace Ircykk\AllegroApi;

class doQueryAllSysStatusResponse
{

    /**
     * @var ArrayOfSysstatustype $sysCountryStatus
     */
    protected $sysCountryStatus = null;

    /**
     * @param ArrayOfSysstatustype $sysCountryStatus
     */
    public function __construct($sysCountryStatus = null)
    {
      $this->sysCountryStatus = $sysCountryStatus;
    }

    /**
     * @return ArrayOfSysstatustype
     */
    public function getSysCountryStatus()
    {
      return $this->sysCountryStatus;
    }

    /**
     * @param ArrayOfSysstatustype $sysCountryStatus
     * @return \Ircykk\AllegroApi\doQueryAllSysStatusResponse
     */
    public function setSysCountryStatus($sysCountryStatus)
    {
      $this->sysCountryStatus = $sysCountryStatus;
      return $this;
    }

}
