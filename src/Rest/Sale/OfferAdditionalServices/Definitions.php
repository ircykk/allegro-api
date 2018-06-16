<?php

namespace Ircykk\AllegroApi\Rest\Sale\OfferAdditionalServices;

use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Definitions.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-additional-services
 *
 * @package Ircykk\AllegroApi\Rest
 */
class Definitions extends AbstractRestResource
{
    /**
     * Returns additional services definitions by user ID.
     *
     * @param string $userId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all($userId)
    {
        return $this->get('/sale/offer-additional-services/definitions?user.id='.rawurldecode($userId));
    }
}
