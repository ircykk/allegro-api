<?php

namespace Ircykk\AllegroApi;

class DoLoginWithAccessTokenRequest
{

    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

    /**
     * @var int $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param string $accessToken
     * @param int $countryCode
     * @param string $webapiKey
     */
    public function __construct($accessToken = null, $countryCode = null, $webapiKey = null)
    {
      $this->accessToken = $accessToken;
      $this->countryCode = $countryCode;
      $this->webapiKey = $webapiKey;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
      return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return \Ircykk\AllegroApi\DoLoginWithAccessTokenRequest
     */
    public function setAccessToken($accessToken)
    {
      $this->accessToken = $accessToken;
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
     * @return \Ircykk\AllegroApi\DoLoginWithAccessTokenRequest
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
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
     * @return \Ircykk\AllegroApi\DoLoginWithAccessTokenRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

}
