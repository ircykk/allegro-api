<?php

namespace Ircykk\AllegroApi\Rest\Sale\Loyalty;

use Ircykk\AllegroApi\Rest\AbstractRestResource;
use Http\Client\Exception;

/**
 * Class Promotions.
 *
 * @link https://developer.allegro.pl/documentation/#/promotions
 *
 * @package Ircykk\AllegroApi\Rest
 */
class Promotions extends AbstractRestResource
{
    /**
     * Returns a list of promotions defined by the specified user.
     *
     * @param string $userId
     * @return mixed
     * @throws Exception
     */
    public function all($userId)
    {
        return $this->get('/sale/loyalty/promotions?user.id='.rawurldecode($userId));
    }

    /**
     * Returns the requested promotion.
     *
     * @param string $promotionId
     * @return mixed
     * @throws Exception
     */
    public function show($promotionId)
    {
        return $this->get('/sale/loyalty/promotions/'.rawurldecode($promotionId));
    }

    /**
     * Creates a new promotion.
     *
     * @param array $params
     * @return mixed
     * @throws Exception
     */
    public function create(array $params)
    {
        return $this->post('/sale/loyalty/promotions', $params);
    }

    /**
     * Deactivates the requested promotion.
     *
     * @param string $promotionId
     * @return mixed
     * @throws Exception
     */
    public function remove($promotionId)
    {
        return $this->delete('/sale/loyalty/promotions/'.rawurldecode($promotionId));
    }
}
