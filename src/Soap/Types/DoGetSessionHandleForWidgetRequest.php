<?php

namespace Ircykk\AllegroApi;

class DoGetSessionHandleForWidgetRequest
{

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $countryCode
     */
    protected $countryCode = null;

    /**
     * @param string $webapiKey
     * @param int $countryCode
     */
    public function __construct($webapiKey = null, $countryCode = null)
    {
      $this->webapiKey = $webapiKey;
      $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
      return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return \Ircykk\AllegroApi\DoGetSessionHandleForWidgetRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param int $countryCode
     * @return \Ircykk\AllegroApi\DoGetSessionHandleForWidgetRequest
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

}
