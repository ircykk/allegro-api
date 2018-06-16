<?php

namespace Ircykk\AllegroApi\Rest;

/**
 * Class AbstractRestBetaResource.
 *
 * @package Ircykk\AllegroApi\Rest
 */
class AbstractRestBetaResource extends AbstractRestResource
{
    /**
     * Adds "Accept" header for beta resources.
     *
     * @param $path
     * @param array $requestHeaders
     * @return mixed
     * @throws \Http\Client\Exception
     */
    protected function get($path, array $requestHeaders = [])
    {
        $requestHeaders['Accept'] = 'application/vnd.allegro.beta.v1+json';

        return parent::get($path, $requestHeaders);
    }

    /**
     * Adds "Accept" header for beta resources.
     *
     * @param $path
     * @param array $params
     * @param array $requestHeaders
     * @return mixed
     * @throws \Http\Client\Exception
     */
    protected function put($path, array $params = [], array $requestHeaders = [])
    {
        $requestHeaders['Accept'] = 'application/vnd.allegro.beta.v1+json';
        $requestHeaders['Content-Type'] = 'application/vnd.allegro.beta.v1+json';

        return parent::put($path, $params, $requestHeaders);
    }

    /**
     * Adds "Accept" header for beta resources.
     *
     * @param $path
     * @param array $params
     * @param array $requestHeaders
     * @return mixed
     * @throws \Http\Client\Exception
     */
    protected function post($path, array $params = [], array $requestHeaders = [])
    {
        $requestHeaders['Accept'] = 'application/vnd.allegro.beta.v1+json';
        $requestHeaders['Content-Type'] = 'application/vnd.allegro.beta.v1+json';

        return parent::post($path, $params, $requestHeaders);
    }
}
