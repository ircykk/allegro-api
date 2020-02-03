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
     * @return Sale\OfferVariants
     */
    public function offerVariants()
    {
        return new Sale\OfferVariants($this->client);
    }

    /**
     * @return Sale\OfferTags
     */
    public function offerTags()
    {
        return new Sale\OfferTags($this->client);
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
     * @return Sale\DeliveryMethods
     */
    public function deliveryMethods()
    {
        return new Sale\DeliveryMethods($this->client);
    }

    /**
     * @return Sale\Commands
     */
    public function commands()
    {
        return new Sale\Commands($this->client);
    }

    /**
     * @return Sale\Images
     */
    public function images()
    {
        return new Sale\Images($this->client);
    }
	
	
    /**
     * @return Sale\Disputes
     */
    public function disputes()
    {
        return new Sale\Disputes($this->client);
    }

}
