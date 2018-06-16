<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Loyalty.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest
 */
class Loyalty extends AbstractRestResource
{
    /**
     * @return Loyalty\Promotions
     */
    public function promotions()
    {
        return new Loyalty\Promotions($this->client);
    }
}
