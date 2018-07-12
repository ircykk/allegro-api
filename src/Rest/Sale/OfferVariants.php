<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestBetaResource;
use Psr\Http\Message\ResponseInterface;
use Http\Client\Exception;

/**
 * Class OfferVariants.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-variants
 *
 * @package Ircykk\AllegroApi\Rest
 */
class OfferVariants extends AbstractRestBetaResource
{
    /**
     * Gets variant set by set id.
     *
     * @param string $setId
     * @return ResponseInterface
     * @throws Exception
     */
    public function show($setId)
    {
        return $this->get('/sale/offer-variants/'.rawurldecode($setId));
    }

    /**
     * Creates variant set.
     *
     * @param array $params
     * @param string $setId
     * @return ResponseInterface
     * @throws Exception
     */
    public function create(array $params, $setId = '')
    {
        if (!$setId) {
            $setId = $this->genUuid();
        }

        return $this->update($setId, $params);
    }

    /**
     * Updates variant set.
     *
     * @param string $setId
     * @param array $params
     * @return ResponseInterface
     * @throws Exception
     */
    public function update($setId, array $params)
    {
        return $this->put('/sale/offer-variants/'.rawurldecode($setId), $params);
    }

    /**
     * Deletes variant set.
     *
     * @param string $setId
     * @return ResponseInterface
     * @throws Exception
     */
    public function remove($setId)
    {
        return $this->delete('/sale/offer-variants/'.rawurldecode($setId));
    }
}
