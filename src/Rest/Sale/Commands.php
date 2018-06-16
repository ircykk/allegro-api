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
     * [BETA] Allows modification of multiple offers.
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

        $requestHeaders = [
            'Accept' => 'application/vnd.allegro.beta.v1+json',
            'Content-Type' => 'application/vnd.allegro.beta.v1+json',
        ];

        return $this->put('/sale/offer-publication-commands/'.rawurldecode($commandId), $params, $requestHeaders);
    }

    /**
     * [BETA] Provides report summary for given commandId.
     *
     * @param string $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerPublicationStatus($commandId)
    {
        $requestHeaders = [
            'Accept' => 'application/vnd.allegro.beta.v1+json',
            'Content-Type' => 'application/vnd.allegro.beta.v1+json',
        ];

        return $this->get('/sale/offer-publication-commands/'.rawurldecode($commandId), $requestHeaders);
    }

    /**
     * [BETA] Provides detailed report for single command task.
     *
     * @param $commandId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function offerPublicationTasks($commandId)
    {
        $requestHeaders = [
            'Accept' => 'application/vnd.allegro.beta.v1+json',
            'Content-Type' => 'application/vnd.allegro.beta.v1+json',
        ];

        return $this->get('/sale/offer-publication-commands/'.rawurldecode($commandId).'/tasks', $requestHeaders);
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
}
