<?php

namespace Ircykk\AllegroApi\Rest\Sale\OfferAdditionalServices;

use Ircykk\AllegroApi\Rest\AbstractRestResource;
use Http\Client\Exception;

/**
 * Class Groups.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-additional-services
 *
 * @package Ircykk\AllegroApi\Rest
 */
class Groups extends AbstractRestResource
{
    /**
     * Returns group of additional services defined by user.
     *
     * @param string $userId
     * @param int $limit
     * @param int $offset
     * @return mixed
     * @throws Exception
     */
    public function all($userId, $limit = 1000, $offset = 0)
    {
        return $this->get('/sale/offer-additional-services/groups?'.http_build_query([
            'user.id' => $userId, 'limit' => (int)$limit, 'offset' => (int)$offset,
        ]));
    }

    /**
     * Returns additional services group for a given ID.
     *
     * @param string $groupId
     * @return mixed
     * @throws Exception
     */
    public function show($groupId)
    {
        return $this->get('/sale/offer-additional-services/groups/'.rawurldecode($groupId));
    }

    /**
     * Creates group of additional services.
     *
     * @param array $params
     * @return mixed
     * @throws Exception
     */
    public function create(array $params)
    {
        return $this->post('/sale/offer-additional-services/groups', $params);
    }

    /**
     * UUpdates existing additional service group.
     *
     * @param string $groupId
     * @param array $params
     * @return mixed
     * @throws Exception
     */
    public function update($groupId, array $params)
    {
        return $this->put('/sale/offer-additional-services/groups/'.rawurldecode($groupId), $params);
    }
}
