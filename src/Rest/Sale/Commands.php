<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Commands.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest
 */
class Commands extends AbstractRestResource
{
    /**
     * Allows modification of multiple offers.
     *
     * @param array $params
     * @param string $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerPublication(array $params, $commandId = '')
    {
        if (!$commandId) {
            $commandId = $this->genUuid();
        }

        return $this->put('/sale/offer-publication-commands/'.rawurldecode($commandId), $params);
    }

    /**
     * Provides report summary for given commandId.
     *
     * @param string $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerPublicationStatus($commandId)
    {
        return $this->get('/sale/offer-publication-commands/'.rawurldecode($commandId));
    }

    /**
     * Provides detailed report for single command task.
     *
     * @param $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerPublicationTasks($commandId)
    {
        return $this->get('/sale/offer-publication-commands/'.rawurldecode($commandId).'/tasks');
    }

    /**
     * Allows modification of multiple offers at once.
     *
     * @param array $params
     * @param string $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerModification(array $params, $commandId = '')
    {
        if (!$commandId) {
            $commandId = $this->genUuid();
        }

        return $this->put('/sale/offer-modification-commands/'.rawurldecode($commandId), $params);
    }

    /**
     * Provides report summary for given commandId.
     *
     * @param string $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerModificationStatus($commandId)
    {
        return $this->get('/sale/offer-modification-commands/'.rawurldecode($commandId));
    }

    /**
     * [BETA] Provides detailed report for single command task.
     *
     * @param $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerModificationTasks($commandId)
    {
        $requestHeaders = [
            'Accept' => 'application/vnd.allegro.beta.v1+json',
            'Content-Type' => 'application/vnd.allegro.beta.v1+json',
        ];

        return $this->get('/sale/offer-modification-commands/'.rawurldecode($commandId).'/tasks', $requestHeaders);
    }

    /**
     * Change Buy Now price in offer.
     *
     * @param string $offerId
     * @param array $params
     * @param string $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function changePrice($offerId, array $params, $commandId = '')
    {
        if (!$commandId) {
            $commandId = $this->genUuid();
        }

        return $this->put(
            '/offers/'.rawurldecode($offerId).'/change-price-commands/'.rawurldecode($commandId),
            $params
        );
    }

    /**
     * Allows price modification of multiple offers at once.
     *
     * @param array $params
     * @param string $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerPriceChange(array $params, $commandId = '')
    {
        if (!$commandId) {
            $commandId = $this->genUuid();
        }

        return $this->put('/sale/offer-price-change-commands/'.rawurldecode($commandId), $params);
    }

    /**
     * Provides report summary for price modification command with given commandId.
     *
     * @param string $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerPriceChangeStatus($commandId)
    {
        return $this->get('/sale/offer-price-change-commands/'.rawurldecode($commandId));
    }

    /**
     * Provides detailed report for price modification command with given commandId.
     *
     * @param string $commandId
     * @param int $limit
     * @param int $offset
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerPriceChangeTasks($commandId, $limit = 100, $offset = 0)
    {
        return $this->get('/sale/offer-price-change-commands/'.rawurldecode($commandId).'/tasks?'
            .http_build_query([
                'limit' => $limit,
                'offset' => $offset,
            ])
        );
    }

    /**
     * Allows quantity modification of multiple offers at once.
     *
     * @param array $params
     * @param string $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerQuantityChange(array $params, $commandId = '')
    {
        if (!$commandId) {
            $commandId = $this->genUuid();
        }

        return $this->put('/sale/offer-quantity-change-commands/'.rawurldecode($commandId), $params);
    }

    /**
     * Provides report summary for quantity modification command with given commandId.
     *
     * @param string $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerQuantityChangeStatus($commandId)
    {
        return $this->get('/sale/offer-quantity-change-commands/'.rawurldecode($commandId));
    }

    /**
     * Provides detailed report for quantity modification command with given commandId.
     *
     * @param string $commandId
     * @param int $limit
     * @param int $offset
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerQuantityChangeTasks($commandId, $limit = 100, $offset = 0)
    {
        return $this->get('/sale/offer-quantity-change-commands/'.rawurldecode($commandId).'/tasks?'
            .http_build_query([
                'limit' => $limit,
                'offset' => $offset,
            ])
        );
    }
}
