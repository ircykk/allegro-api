<?php

namespace Ircykk\AllegroApi\Rest;

use Psr\Http\Message\ResponseInterface;
use Http\Client\Exception;

/**
 * Class PointsOfService.
 *
 * @link https://developer.allegro.pl/documentation/#/points-of-service
 *
 * @package Ircykk\AllegroApi\Rest
 */
class PointsOfService extends AbstractRestResource
{
    /**
     * Returns a list of points of service.
     *
     * @param string $id
     * @return ResponseInterface
     * @throws Exception
     */
    public function all($id)
    {
        return $this->get('/points-of-service?seller.id='.rawurldecode($id));
    }

    /**
     * Returns point of service details for a given ID.
     *
     * @param string $id
     * @return mixed
     * @throws Exception
     */
    public function show($id)
    {
        return $this->get('/points-of-service/'.rawurldecode($id));
    }

    /**
     * Creates a point of service.
     *
     * @param array $params
     * @return mixed
     * @throws Exception
     */
    public function create(array $params)
    {
        return $this->post('/points-of-service', $params);
    }

    /**
     * Updates a point of service.
     *
     * @param string $id
     * @param array $params
     * @return mixed
     * @throws Exception
     */
    public function update($id, array $params)
    {
        return $this->put('/points-of-service/'.rawurldecode($id), $params);
    }

    /**
     * Deletes a point of service.
     *
     * @param string $id
     * @return mixed
     * @throws Exception
     */
    public function remove($id)
    {
        return $this->delete('/points-of-service/'.rawurldecode($id));
    }
}
