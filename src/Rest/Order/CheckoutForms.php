<?php

namespace Ircykk\AllegroApi\Rest\Order;

use Http\Client\Exception;
use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class CheckoutForms.
 *
 * @link https://developer.allegro.pl/documentation/#operation/getListOfOrdersUsingGET
 *
 * @package Ircykk\AllegroApi\Rest\Order
 */
class CheckoutForms extends AbstractRestResource
{
    /**
     * Returns latest checkout forms (orders).
     *
     * @param int $offset
     * @param int $limit
     * @param string $status        BOUGHT, FILLED_IN, READY_FOR_PROCESSING, ALL
     * @param string $boughtAtTo    Date in ISO8601 format (yyyy-MM-dd'T'HH:mm:ss.SSSZ)
     * @param string $boughtAtFrom  Date in ISO8601 format (yyyy-MM-dd'T'HH:mm:ss.SSSZ)
     * @return mixed
     * @throws Exception
     */
    public function all($offset = 0, $limit = 100, $status = 'ALL', $boughtAtTo = '', $boughtAtFrom = '')
    {
        return $this->get('/order/checkout-forms?'.http_build_query([
            'offset' => $offset,
            'limit' => $limit,
            'status' => $status,
            'lineItems.boughtAt.lte' => $boughtAtTo,
            'lineItems.boughtAt.gte' => $boughtAtFrom,
        ]));
    }

    /**
     * Get checkout form by id.
     *
     * @param $checkoutFormId
     * @return mixed
     * @throws Exception
     */
    public function show($checkoutFormId)
    {
        return $this->get('/order/checkout-forms/'.rawurldecode($checkoutFormId));
    }

    /**
     * Get a list of parcel tracking numbers.
     *
     * @param string $idCheckoutForm
     * @return mixed
     * @throws Exception
     */
    public function showTrackingNumbers($idCheckoutForm)
    {
        return $this->get('/order/checkout-forms/'.rawurldecode($idCheckoutForm).'/shipments');
    }

    /**
     * Add a parcel tracking number.
     *
     * @param string $idCheckoutForm
     * @param string $carrierId
     * @param string $waybill
     * @param array $lineItems
     * @param string $carrierName
     * @return mixed
     * @throws Exception
     */
    public function addTrackingNumber($idCheckoutForm, $carrierId, $waybill, $lineItems, $carrierName = null)
    {
        return $this->post('/order/checkout-forms/'.rawurldecode($idCheckoutForm).'/shipments', [
            'carrierId' => $carrierId,
            'waybill' => $waybill,
            'lineItems' => $lineItems,
            'carrierName' => $carrierName,
        ]);
    }
}
