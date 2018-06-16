<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestBetaResource;
use Http\Client\Exception;

/**
 * Class ShippingRates.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest
 */
class ShippingRates extends AbstractRestBetaResource
{
    /**
     * [BETA] Returns a list of seller's shipping rates.
     *
     * @param string $sellerId
     * @return mixed
     * @throws Exception
     */
    public function all($sellerId)
    {
        return $this->get('/sale/shipping-rates?seller.id='.rawurldecode($sellerId));
    }

    /**
     * [BETA] Returns details of the given shipping rates set.
     *
     * @param string $shippingRatesSetId
     * @return mixed
     * @throws Exception
     */
    public function show($shippingRatesSetId)
    {
        return $this->get('/sale/shipping-rates/'.rawurldecode($shippingRatesSetId));
    }
}
