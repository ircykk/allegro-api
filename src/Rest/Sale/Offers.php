<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Offers.
 *
 * @link https://developer.allegro.pl/documentation/#operation/searchOffersUsingGET
 *
 * @package Ircykk\AllegroApi\Rest\Sale
 */
class Offers extends AbstractRestResource
{
    /**
     * Gets seller's offers.
     *
     * @param string $sellerId
     * @param string $offerId
     * @param string $name
     * @param float $priceFrom
     * @param float $priceTo
     * @param array $publicationStatuses    INACTIVE, ACTIVE, ACTIVATING, ENDED
     * @param array $sellingModeFormats     BUY_NOW, ADVERTISEMENT, AUCTION
     * @param string $externalId
     * @param string $sort
     * @param int $limit
     * @param int $offset
     *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all(
        $sellerId,
        $offerId = null,
        $name = null,
        $priceFrom = null,
        $priceTo = null,
        array $publicationStatuses = [],
        array $sellingModeFormats = [],
        $externalId = null,
        $sort = null,
        $limit = 20,
        $offset = 0
    ) {
        $params = [];
        foreach ($publicationStatuses as $status) {
            $params[] = 'publication.status='.$status;
        }

        foreach ($sellingModeFormats as $format) {
            $params[] = 'publication.format='.$format;
        }

        return $this->get('/sale/offers?'.http_build_query([
                'seller.id' => $sellerId,
                'offer.id' => $offerId,
                'name' => $name,
                'sellingMode.price.amount.gte' => $priceFrom,
                'sellingMode.price.amount.lte' => $priceTo,
                'external.id' => $externalId,
                'sort' => $sort,
                'limit' => $limit,
                'offset' => $offset,
            ]).'&'.implode('&', $params));
    }

    /**
     * Gets single offer by id.
     *
     * @param string $offerId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function show($offerId)
    {
        return $this->get('/sale/offers/'.rawurldecode($offerId));
    }

    /**
     * Creates new offer.
     *
     * @param array $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function create(array $params)
    {
        return $this->post('/sale/offers', $params);
    }

    /**
     * Updates offer by id.
     *
     * @param string $offerId
     * @param array $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function update($offerId, array $params)
    {
        return $this->put('/sale/offers/'.rawurldecode($offerId), $params);
    }

    /**
     * @return Tags\Tags
     */
    public function tags()
    {
        return new Tags\Tags($this->client);
    }
}
