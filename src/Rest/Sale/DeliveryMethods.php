<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Http\Client\Exception;
use Ircykk\AllegroApi\Rest\AbstractRestBetaResource;

/**
 * Class DeliveryMethods.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management/get_sale_delivery_methods
 *
 * @package Ircykk\AllegroApi\Rest
 */
class DeliveryMethods extends AbstractRestBetaResource
{
    /**
     * [BETA] Get a list of available delivery methods.
     *
     * @return mixed
     * @throws Exception
     */
    public function all()
    {
        return $this->get('/sale/delivery-methods');
    }
}
