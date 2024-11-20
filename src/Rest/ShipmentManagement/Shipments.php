<?php

namespace Ircykk\AllegroApi\Rest\ShipmentManagement;

use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Shipments.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest\ShipmentManagement
 */
class Shipments extends AbstractRestResource
{
    /**
     * Create new shipment.
     *
     * @param array $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function create(array $params)
    {
        return $this->post('/shipment-management/shipments/create-commands', $params);
    }

    /**
     * Get shipment creation command status.
     * 
     * @param string $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function creationStatus($commandId)
    {
        return $this->get('/shipment-management/shipments/create-commands/' . rawurldecode($commandId));
    }

    /**
     * Cancel shipment.
     *
     * @param array $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function cancel(array $params)
    {
        return $this->post('/shipment-management/shipments/cancel-commands', $params);
    }

    /**
     * Get shipment cancellation status.
     * 
     * @param string $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function cancelationStatus($commandId)
    {
        return $this->get('/shipment-management/shipments/cancel-commands/' . rawurldecode($commandId));
    }

    /**
     * Get shipment details.
     * 
     * @param string $shipmentId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function details($shipmentId)
    {
        return $this->get('/shipment-management/shipments/' . rawurldecode($shipmentId));
    }
}