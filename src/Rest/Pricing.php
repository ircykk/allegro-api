<?php

namespace Ircykk\AllegroApi\Rest;

use Ircykk\AllegroApi\Exception\InvalidArgumentException;

/**
 * Class Pricing.
 *
 * @link https://developer.allegro.pl/documentation/#/pricing
 *
 * @package Ircykk\AllegroApi\Rest
 */
class Pricing extends AbstractRestResource
{
    /**
     * Calculates fee preview.
     *
     * @param array $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function feePreview(array $params)
    {
        return $this->post('/pricing/fee-preview', $params);
    }

    /**
     * Returns current offer quotes for authenticated user and list of offers.
     *
     * @param array $offerIds
     * @param string $name
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerQuotes($offerIds, $name = '')
    {
        if (count($offerIds) > 20) {
            throw new InvalidArgumentException(sprintf('Maximum 20 of offer ids, %u given.', count($offerIds)));
        }

        return $this->get('/pricing/offer-quotes?'.http_build_query([
            'offer.id' => implode(',', $offerIds),
            'name' => $name,
        ]));
    }
}
