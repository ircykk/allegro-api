<?php

namespace Ircykk\AllegroApi\Rest;

/**
 * Class Sale.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest
 */
class Sale extends AbstractRestResource
{
    /**
     * [BETA] Returns a list of available delivery methods.
     *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function deliveryMethods()
    {
        $requestHeaders['Accept'] = 'application/vnd.allegro.beta.v1+json';

        return $this->get('/sale/delivery-methods', $requestHeaders);
    }

    /**
     * @return Sale\Categories
     */
    public function categories()
    {
        return new Sale\Categories($this->client);
    }

    /**
     * @return Sale\ShippingRates
     */
    public function shippingRates()
    {
        return new Sale\ShippingRates($this->client);
    }

    /**
     * @return Sale\Offers
     */
    public function offers()
    {
        return new Sale\Offers($this->client);
    }

    /**
     * @return Sale\Loyalty
     */
    public function loyalty()
    {
        return new Sale\Loyalty($this->client);
    }

    /**
     * @return Sale\UserRating
     */
    public function userRating()
    {
        return new Sale\UserRating($this->client);
    }

    /**
     * @return Sale\OfferContacts
     */
    public function offerContacts()
    {
        return new Sale\OfferContacts($this->client);
    }
    /**
     * @return Sale\OfferAdditionalServices
     */
    public function offerAdditionalServices()
    {
        return new Sale\OfferAdditionalServices($this->client);
    }

    /**
     * @return Sale\SizeTables
     */
    public function sizeTables()
    {
        return new Sale\SizeTables($this->client);
    }

    /**
     * @return Sale\Commands
     */
    public function commands()
    {
        return new Sale\Commands($this->client);
    }
}
