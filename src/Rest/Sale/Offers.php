<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Offers.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest\Sale
 */
class Offers extends AbstractRestResource
{
    /**
     * Gets seller's offers.
     *
     * @param string $sellerId
     * @param string $name
     * @param float $priceFrom
     * @param float $priceTo
     * @param string $publicationStatus INACTIVE, ACTIVE, ACTIVATING, ENDED
     * @param string $sellingModeFormat BUY_NOW, ADVERTISEMENT, AUCTION
     * @param string $sort               sellingMode.price.amount (ASC)
     *                                  -sellingMode.price.amount (DESC)
     *                                  stock.sold (ASC)
     *                                  -stock.sold (DESC)
     *                                  stock.available (ASC)
     *                                  -stock.available (DESC)
     * @param int $limit
     * @param int $offset
     * @param string $externalId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all(
        $sellerId,
        $name = null,
        $priceFrom = null,
        $priceTo = null,
        $publicationStatus = null,
        $sellingModeFormat = null,
        $sort = null,
        $limit = 20,
        $offset = 0,
        $externalId = null
    ) {
        $requestHeaders['Accept'] = 'application/vnd.allegro.beta.v1+json';

        return $this->get('/sale/offers?'.http_build_query(
                array_merge(
                    [
                        'seller.id' => $sellerId,
                        'name' => $name,
                        'sellingMode.price.amount.gte' => $priceFrom,
                        'sellingMode.price.amount.lte' => $priceTo,
                        'publication.status' => $publicationStatus,
                        'sellingMode.format' => $sellingModeFormat,
                        'external.id' => $externalId,
                        'sort' => $sort,
                        'limit' => $limit,
                        'offset' => $offset,
                    ]
                )
            ), $requestHeaders);
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
