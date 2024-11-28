<?php

namespace Ircykk\AllegroApi\Rest\ShipmentManagement;

use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class DeliveryServices.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest\ShipmentManagement
 */
class DeliveryServices extends AbstractRestResource
{
    /**
     * Get available delivery services.
     *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all()
    {
        return $this->get('/shipment-management/delivery-services');
    }
}