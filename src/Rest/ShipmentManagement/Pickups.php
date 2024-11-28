<?php

namespace Ircykk\AllegroApi\Rest\ShipmentManagement;

use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Pickups.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest\ShipmentManagement
 */
class Pickups extends AbstractRestResource
{
    /**
     * Request shipments pickup.
     *
     * @param array $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function create(array $params)
    {
        return $this->post('/shipment-management/pickups/create-commands', $params);
    }

    /**
     * Create pickup command status.
     * 
     * @param string $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function creationStatus($commandId)
    {
        return $this->get('/shipment-management/pickups/create-commands/' . rawurldecode($commandId));
    }
}