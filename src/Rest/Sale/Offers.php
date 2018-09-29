<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestBetaResource;

/**
 * Class Offers.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest\Sale
 */
class Offers extends AbstractRestBetaResource
{
    /**
     * [BETA] Gets single offer by id.
     *
     * @param string $offerId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function show($offerId)
    {
        return $this->get('/sale/offers/'.rawurldecode($offerId));
    }

    /**
     * [BETA] Creates new offer.
     *
     * @param array $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function create(array $params)
    {
        return $this->post('/sale/offers', $params);
    }

    /**
     * [BETA] Updates offer by id.
     *
     * @param string $offerId
     * @param array $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function update($offerId, array $params)
    {
        return $this->put('/sale/offers/'.rawurldecode($offerId), $params);
    }

    /**
     * @return Tags\Tags
     */
    public function tags()
    {
        return new Tags\Tags($this->client);
    }
}
