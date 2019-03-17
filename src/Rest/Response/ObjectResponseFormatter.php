<?php

namespace Ircykk\AllegroApi\Rest\Response;

use Psr\Http\Message\ResponseInterface;

/**
 * Class ObjectResponseFormatter.
 *
 * @package Ircykk\AllegroApi\Rest
 */
class ObjectResponseFormatter implements ResponseFormatterInterface
{
    /**
     * Formats response to object.
     *
     * @param ResponseInterface $response
     * @return mixed
     */
    public function formatResponse(ResponseInterface $response)
    {
        if (strpos($response->getHeaderLine('Content-Type'), 'json') !== false) {
            return json_decode($response->getBody()->__toString());
        }

        return $response;
    }
}
