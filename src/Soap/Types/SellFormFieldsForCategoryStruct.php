<?php

namespace Ircykk\AllegroApi;

class SellFormFieldsForCategoryStruct
{

    /**
     * @var ArrayOfSellformtype $sellFormFieldsList
     */
    protected $sellFormFieldsList = null;

    /**
     * @var int $sellFormFieldsVersionKey
     */
    protected $sellFormFieldsVersionKey = null;

    /**
     * @var string $sellFormFieldsComponentValue
     */
    protected $sellFormFieldsComponentValue = null;

    /**
     * @param int $sellFormFieldsVersionKey
     * @param string $sellFormFieldsComponentValue
     */
    public function __construct($sellFormFieldsVersionKey = null, $sellFormFieldsComponentValue = null)
    {
      $this->sellFormFieldsVersionKey = $sellFormFieldsVersionKey;
      $this->sellFormFieldsComponentValue = $sellFormFieldsComponentValue;
    }

    /**
     * @return ArrayOfSellformtype
     */
    public function getSellFormFieldsList()
    {
      return $this->sellFormFieldsList;
    }

    /**
     * @param ArrayOfSellformtype $sellFormFieldsList
     * @return \Ircykk\AllegroApi\SellFormFieldsForCategoryStruct
     */
    public function setSellFormFieldsList($sellFormFieldsList)
    {
      $this->sellFormFieldsList = $sellFormFieldsList;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellFormFieldsVersionKey()
    {
      return $this->sellFormFieldsVersionKey;
    }

    /**
     * @param int $sellFormFieldsVersionKey
     * @return \Ircykk\AllegroApi\SellFormFieldsForCategoryStruct
     */
    public function setSellFormFieldsVersionKey($sellFormFieldsVersionKey)
    {
      $this->sellFormFieldsVersionKey = $sellFormFieldsVersionKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellFormFieldsComponentValue()
    {
      return $this->sellFormFieldsComponentValue;
    }

    /**
     * @param string $sellFormFieldsComponentValue
     * @return \Ircykk\AllegroApi\SellFormFieldsForCategoryStruct
     */
    public function setSellFormFieldsComponentValue($sellFormFieldsComponentValue)
    {
      $this->sellFormFieldsComponentValue = $sellFormFieldsComponentValue;
      return $this;
    }

}
