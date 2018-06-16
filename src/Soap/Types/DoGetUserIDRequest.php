<?php

namespace Ircykk\AllegroApi;

class DoGetUserIDRequest
{

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var string $userLogin
     */
    protected $userLogin = null;

    /**
     * @var string $userEmail
     */
    protected $userEmail = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param int $countryId
     * @param string $userLogin
     * @param string $userEmail
     * @param string $webapiKey
     */
    public function __construct($countryId = null, $userLogin = null, $userEmail = null, $webapiKey = null)
    {
      $this->countryId = $countryId;
      $this->userLogin = $userLogin;
      $this->userEmail = $userEmail;
      $this->webapiKey = $webapiKey;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return \Ircykk\AllegroApi\DoGetUserIDRequest
     */
    public function setCountryId($countryId)
    {
      $this->countryId = $countryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserLogin()
    {
      return $this->userLogin;
    }

    /**
     * @param string $userLogin
     * @return \Ircykk\AllegroApi\DoGetUserIDRequest
     */
    public function setUserLogin($userLogin)
    {
      $this->userLogin = $userLogin;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserEmail()
    {
      return $this->userEmail;
    }

    /**
     * @param string $userEmail
     * @return \Ircykk\AllegroApi\DoGetUserIDRequest
     */
    public function setUserEmail($userEmail)
    {
      $this->userEmail = $userEmail;
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
     * @return \Ircykk\AllegroApi\DoGetUserIDRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

}
