<?php

namespace Ircykk\AllegroApi\Rest;

use Ircykk\AllegroApi\Client;
use Psr\Http\Message\ResponseInterface;
use Ramsey\Uuid\Uuid;

/**
 * Class AbstractRestResource.
 *
 * @package Ircykk\AllegroApi\Rest
 */
abstract class AbstractRestResource
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $lastUuid;

    /**
     * AbstractRestResource constructor.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param Client $client
     */
    protected function setClient(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return string
     */
    public function getLastUuid()
    {
        return $this->lastUuid;
    }

    /**
     * @return string
     * @throws \Exception
     */
    protected function genUuid()
    {
        $this->lastUuid = Uuid::uuid4()->toString();

        return $this->lastUuid;
    }

    /**
     * Sends a GET request.
     *
     * @param string $path
     * @param array $requestHeaders
     * @return mixed
     * @throws \Http\Client\Exception
     */
    protected function get($path, array $requestHeaders = [])
    {
        $response = $this->client->get($path, $requestHeaders);

        return $this->formatResponse($response);
    }

    /**
     * Sends a POST request.
     *
     * @param string $path
     * @param mixed $data
     * @param array $requestHeaders
     * @return mixed
     * @throws \Http\Client\Exception
     */
    protected function post($path, $data, array $requestHeaders = [])
    {
        if (empty($requestHeaders['Content-Type'])) {
            $requestHeaders['Content-Type'] = 'application/vnd.allegro.public.v1+json';
        }

        $response = $this->client->post(
            $path,
            $requestHeaders,
            is_array($data) ? json_encode($data) : $data
        );

        return $this->formatResponse($response);
    }

    /**
     * Sends PUT request.
     *
     * @param string $path
     * @param array $params
     * @param array $requestHeaders
     * @return mixed
     * @throws \Http\Client\Exception
     */
    protected function put($path, array $params, array $requestHeaders = [])
    {
        if (empty($requestHeaders['Content-Type'])) {
            $requestHeaders['Content-Type'] = 'application/vnd.allegro.public.v1+json';
        }

        $response = $this->client->put(
            $path,
            $requestHeaders,
            json_encode($params)
        );

        return $this->formatResponse($response);
    }

    /**
     * Sends DELETE request.
     *
     * @param string $path
     * @param array $requestHeaders
     * @return mixed
     * @throws \Http\Client\Exception
     */
    protected function delete($path, array $requestHeaders = [])
    {
        $response = $this->client->delete($path, $requestHeaders);

        return $this->formatResponse($response);
    }

    /**
     * Formats HTTP response.
     *
     * @param ResponseInterface $response
     * @return mixed
     */
    protected function formatResponse(ResponseInterface $response)
    {
        /**
         * Convert HTTP errors like 403 "Forbidden" without json body
         * to unify errors for all responses.
         *
         * @todo move this code
         */
        if ($response->getStatusCode() !== 200 && $response->getBody()->__toString() === '') {
            $errorHandler = new ResponseErrorHandler($response);
            $response = $errorHandler->getResponse();
        }

        return $this->client->getResponseFormatter()->formatResponse($response);
    }
}
