<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Http\Client\Exception;
use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class ShippingRates.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest
 */
class ShippingRates extends AbstractRestResource
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

    /**
     * Creates new seller's shipping rates set.
     *
     * @param array $params
     * @return mixed
     * @throws Exception
     */
    public function create(array $params)
    {
        return $this->post('/sale/shipping-rates', $params);
    }

    /**
     * Updates seller's shipping rates set.
     *
     * @param string $setId
     * @param array $params
     * @return mixed
     * @throws Exception
     */
    public function update($setId, array $params)
    {
        return $this->put('/sale/shipping-rates/'.rawurldecode($setId), $params);
    }
}
