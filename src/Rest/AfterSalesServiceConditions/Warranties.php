<?php

namespace Ircykk\AllegroApi\Rest\AfterSalesServiceConditions;

use Ircykk\AllegroApi\Rest\AbstractRestResource;
use Http\Client\Exception;

/**
 * Class Warranties.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-additional-services
 *
 * @package Ircykk\AllegroApi\Rest
 */
class Warranties extends AbstractRestResource
{
    /**
     * Get seller warranties listing.
     *
     * @param string $sellerId
     * @param int $limit
     * @param int $offset
     * @return mixed
     * @throws Exception
     */
    public function all($sellerId, $limit = 1000, $offset = 0)
    {
        return $this->get('/after-sales-service-conditions/warranties?'.http_build_query([
            'sellerId' => $sellerId, 'limit' => (int)$limit, 'offset' => (int)$offset,
        ]));
    }
}
