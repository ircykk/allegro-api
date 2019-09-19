<?php

namespace Ircykk\AllegroApi\Rest\Order;

use Http\Client\Exception;
use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class EventStats.
 *
 * @link https://developer.allegro.pl/documentation/#operation/getOrderEventsStatisticsUsingGET
 *
 * @package Ircykk\AllegroApi\Rest\Order
 */
class EventStats extends AbstractRestResource
{
    /**
     * Returns object that contains event id and occurrence date of the latest event.
     *
     * @return mixed
     * @throws Exception
     */
    public function show()
    {
        return $this->get('/order/event-stats');
    }
}
