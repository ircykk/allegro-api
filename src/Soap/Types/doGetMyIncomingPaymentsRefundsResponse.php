<?php

namespace Ircykk\AllegroApi;

class doGetMyIncomingPaymentsRefundsResponse
{

    /**
     * @var ArrayOfUserincomingpaymentrefundsstruct $payTransIncomeRefunds
     */
    protected $payTransIncomeRefunds = null;

    /**
     * @param ArrayOfUserincomingpaymentrefundsstruct $payTransIncomeRefunds
     */
    public function __construct($payTransIncomeRefunds = null)
    {
      $this->payTransIncomeRefunds = $payTransIncomeRefunds;
    }

    /**
     * @return ArrayOfUserincomingpaymentrefundsstruct
     */
    public function getPayTransIncomeRefunds()
    {
      return $this->payTransIncomeRefunds;
    }

    /**
     * @param ArrayOfUserincomingpaymentrefundsstruct $payTransIncomeRefunds
     * @return \Ircykk\AllegroApi\doGetMyIncomingPaymentsRefundsResponse
     */
    public function setPayTransIncomeRefunds($payTransIncomeRefunds)
    {
      $this->payTransIncomeRefunds = $payTransIncomeRefunds;
      return $this;
    }

}
