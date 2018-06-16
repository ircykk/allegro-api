<?php

namespace Ircykk\AllegroApi;

class PharmacyRecipientDataStruct
{

    /**
     * @var string $recipientFirstName
     */
    protected $recipientFirstName = null;

    /**
     * @var string $recipientLastName
     */
    protected $recipientLastName = null;

    /**
     * @var string $recipientAddress
     */
    protected $recipientAddress = null;

    /**
     * @var string $recipientPostcode
     */
    protected $recipientPostcode = null;

    /**
     * @var string $recipientCity
     */
    protected $recipientCity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRecipientFirstName()
    {
      return $this->recipientFirstName;
    }

    /**
     * @param string $recipientFirstName
     * @return \Ircykk\AllegroApi\PharmacyRecipientDataStruct
     */
    public function setRecipientFirstName($recipientFirstName)
    {
      $this->recipientFirstName = $recipientFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientLastName()
    {
      return $this->recipientLastName;
    }

    /**
     * @param string $recipientLastName
     * @return \Ircykk\AllegroApi\PharmacyRecipientDataStruct
     */
    public function setRecipientLastName($recipientLastName)
    {
      $this->recipientLastName = $recipientLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientAddress()
    {
      return $this->recipientAddress;
    }

    /**
     * @param string $recipientAddress
     * @return \Ircykk\AllegroApi\PharmacyRecipientDataStruct
     */
    public function setRecipientAddress($recipientAddress)
    {
      $this->recipientAddress = $recipientAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientPostcode()
    {
      return $this->recipientPostcode;
    }

    /**
     * @param string $recipientPostcode
     * @return \Ircykk\AllegroApi\PharmacyRecipientDataStruct
     */
    public function setRecipientPostcode($recipientPostcode)
    {
      $this->recipientPostcode = $recipientPostcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientCity()
    {
      return $this->recipientCity;
    }

    /**
     * @param string $recipientCity
     * @return \Ircykk\AllegroApi\PharmacyRecipientDataStruct
     */
    public function setRecipientCity($recipientCity)
    {
      $this->recipientCity = $recipientCity;
      return $this;
    }

}
