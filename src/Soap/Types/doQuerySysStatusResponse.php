<?php

namespace Ircykk\AllegroApi;

class doQuerySysStatusResponse
{

    /**
     * @var string $info
     */
    protected $info = null;

    /**
     * @var int $verKey
     */
    protected $verKey = null;

    /**
     * @param string $info
     * @param int $verKey
     */
    public function __construct($info = null, $verKey = null)
    {
      $this->info = $info;
      $this->verKey = $verKey;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
      return $this->info;
    }

    /**
     * @param string $info
     * @return \Ircykk\AllegroApi\doQuerySysStatusResponse
     */
    public function setInfo($info)
    {
      $this->info = $info;
      return $this;
    }

    /**
     * @return int
     */
    public function getVerKey()
    {
      return $this->verKey;
    }

    /**
     * @param int $verKey
     * @return \Ircykk\AllegroApi\doQuerySysStatusResponse
     */
    public function setVerKey($verKey)
    {
      $this->verKey = $verKey;
      return $this;
    }

}
