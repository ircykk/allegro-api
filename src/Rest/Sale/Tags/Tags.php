<?php

namespace Ircykk\AllegroApi\Rest\Sale\Tags;

use Http\Client\Exception;
use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Tags.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management/
 *
 * @package Ircykk\AllegroApi\Rest\Sale
 */
class Tags extends AbstractRestResource
{
    /**
     * Gets list of tags assigned to offer.
     *
     * @param string $offerId
     * @return mixed
     * @throws Exception
     */
    public function all($offerId)
    {
        return $this->get('/sale/offers/'.rawurldecode($offerId).'/tags');
    }

    /**
     * Assigns a tag to offer.
     *
     * @param string $offerId
     * @param array $params
     * @return mixed
     * @throws Exception
     */
    public function add($offerId, $params)
    {
        return $this->post('/sale/offers/'.rawurldecode($offerId).'/tags', $params);
    }
}
