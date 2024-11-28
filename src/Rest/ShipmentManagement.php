<?php

namespace Ircykk\AllegroApi\Rest;

/**
 * Class ShipmentManagement.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest
 */
class ShipmentManagement extends AbstractRestResource
{
    /**
     * @return ShipmentManagement\DeliveryServices
     */
    public function deliveryServices()
    {
        return new ShipmentManagement\DeliveryServices($this->client);
    }

    /**
     * @return ShipmentManagement\Shipments
     */
    public function shipments()
    {
        return new ShipmentManagement\Shipments($this->client);
    }

    /**
     * @return ShipmentManagement\Pickups
     */
    public function pickups()
    {
        return new ShipmentManagement\Pickups($this->client);
    }

    /**
     * Get shipments labels.
     *
     * @param array $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function label(array $params)
    {
        return $this->post('/shipment-management/label', $params);
    }

    /**
     * Get shipments protocol.
     *
     * @param array $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function protocol(array $params)
    {
        return $this->post('/shipment-management/protocol', $params);
    }

    /**
     * Get shipments pickup proposals.
     *
     * @param array $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function pickupProposals(array $params)
    {
        return $this->post('/shipment-management/pickup-proposals', $params);
    }
}