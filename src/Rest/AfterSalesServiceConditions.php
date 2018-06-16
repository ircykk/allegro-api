<?php

namespace Ircykk\AllegroApi\Rest;

/**
 * Class AfterSalesServiceConditions.
 *
 * @link https://developer.allegro.pl/documentation/#/after-sales-service-conditions
 *
 * @package Ircykk\AllegroApi\Rest
 */
class AfterSalesServiceConditions extends AbstractRestResource
{
    /**
     * @return AfterSalesServiceConditions\ReturnPolicies
     */
    public function returnPolicies()
    {
        return new AfterSalesServiceConditions\ReturnPolicies($this->client);
    }

    /**
     * @return AfterSalesServiceConditions\ImpliedWarranties
     */
    public function impliedWarranties()
    {
        return new AfterSalesServiceConditions\ImpliedWarranties($this->client);
    }

    /**
     * @return AfterSalesServiceConditions\Warranties
     */
    public function warranties()
    {
        return new AfterSalesServiceConditions\Warranties($this->client);
    }
}
