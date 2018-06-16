<?php

namespace Ircykk\AllegroApi;

class doGetMyPayoutsResponse
{

    /**
     * @var ArrayOfUserpayoutstruct $payTransPayout
     */
    protected $payTransPayout = null;

    /**
     * @param ArrayOfUserpayoutstruct $payTransPayout
     */
    public function __construct($payTransPayout = null)
    {
      $this->payTransPayout = $payTransPayout;
    }

    /**
     * @return ArrayOfUserpayoutstruct
     */
    public function getPayTransPayout()
    {
      return $this->payTransPayout;
    }

    /**
     * @param ArrayOfUserpayoutstruct $payTransPayout
     * @return \Ircykk\AllegroApi\doGetMyPayoutsResponse
     */
    public function setPayTransPayout($payTransPayout)
    {
      $this->payTransPayout = $payTransPayout;
      return $this;
    }

}
