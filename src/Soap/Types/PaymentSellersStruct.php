<?php

namespace Ircykk\AllegroApi;

class PaymentSellersStruct
{

    /**
     * @var int $payTransSellerId
     */
    protected $payTransSellerId = null;

    /**
     * @var string $payTransSellerName
     */
    protected $payTransSellerName = null;

    /**
     * @var ArrayOfPaymentitemsstruct $payTransItems
     */
    protected $payTransItems = null;

    /**
     * @var float $payTransSellerPostageAmount
     */
    protected $payTransSellerPostageAmount = null;

    /**
     * @param int $payTransSellerId
     * @param string $payTransSellerName
     * @param float $payTransSellerPostageAmount
     */
    public function __construct($payTransSellerId = null, $payTransSellerName = null, $payTransSellerPostageAmount = null)
    {
      $this->payTransSellerId = $payTransSellerId;
      $this->payTransSellerName = $payTransSellerName;
      $this->payTransSellerPostageAmount = $payTransSellerPostageAmount;
    }

    /**
     * @return int
     */
    public function getPayTransSellerId()
    {
      return $this->payTransSellerId;
    }

    /**
     * @param int $payTransSellerId
     * @return \Ircykk\AllegroApi\PaymentSellersStruct
     */
    public function setPayTransSellerId($payTransSellerId)
    {
      $this->payTransSellerId = $payTransSellerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayTransSellerName()
    {
      return $this->payTransSellerName;
    }

    /**
     * @param string $payTransSellerName
     * @return \Ircykk\AllegroApi\PaymentSellersStruct
     */
    public function setPayTransSellerName($payTransSellerName)
    {
      $this->payTransSellerName = $payTransSellerName;
      return $this;
    }

    /**
     * @return ArrayOfPaymentitemsstruct
     */
    public function getPayTransItems()
    {
      return $this->payTransItems;
    }

    /**
     * @param ArrayOfPaymentitemsstruct $payTransItems
     * @return \Ircykk\AllegroApi\PaymentSellersStruct
     */
    public function setPayTransItems($payTransItems)
    {
      $this->payTransItems = $payTransItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayTransSellerPostageAmount()
    {
      return $this->payTransSellerPostageAmount;
    }

    /**
     * @param float $payTransSellerPostageAmount
     * @return \Ircykk\AllegroApi\PaymentSellersStruct
     */
    public function setPayTransSellerPostageAmount($payTransSellerPostageAmount)
    {
      $this->payTransSellerPostageAmount = $payTransSellerPostageAmount;
      return $this;
    }

}
