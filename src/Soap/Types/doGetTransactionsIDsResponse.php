<?php

namespace Ircykk\AllegroApi;

class doGetTransactionsIDsResponse
{

    /**
     * @var ArrayOfLong $transactionsIdsArray
     */
    protected $transactionsIdsArray = null;

    /**
     * @param ArrayOfLong $transactionsIdsArray
     */
    public function __construct($transactionsIdsArray = null)
    {
      $this->transactionsIdsArray = $transactionsIdsArray;
    }

    /**
     * @return ArrayOfLong
     */
    public function getTransactionsIdsArray()
    {
      return $this->transactionsIdsArray;
    }

    /**
     * @param ArrayOfLong $transactionsIdsArray
     * @return \Ircykk\AllegroApi\doGetTransactionsIDsResponse
     */
    public function setTransactionsIdsArray($transactionsIdsArray)
    {
      $this->transactionsIdsArray = $transactionsIdsArray;
      return $this;
    }

}
