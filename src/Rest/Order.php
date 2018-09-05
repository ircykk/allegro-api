<?php

namespace Ircykk\AllegroApi\Rest;

/**
 * Class Order.
 *
 * @package Ircykk\AllegroApi\Rest
 */
class Order extends AbstractRestResource
{
    /**
     * @return Order\Events
     */
    public function events()
    {
        return new Order\Events($this->client);
    }

    /**
     * @return Order\CheckoutForms
     */
    public function checkoutForms()
    {
        return new Order\CheckoutForms($this->client);
    }

    /**
     * @return Order\EventStats
     */
    public function eventStats()
    {
        return new Order\EventStats($this->client);
    }
}
