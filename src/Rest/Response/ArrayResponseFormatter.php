<?php

namespace Ircykk\AllegroApi\Rest\Response;

use Psr\Http\Message\ResponseInterface;

/**
 * Class ArrayResponseFormatter.
 *
 * @package Ircykk\AllegroApi\Rest
 */
class ArrayResponseFormatter implements ResponseFormatterInterface
{
    /**
     * Formats response to array.
     *
     * @param ResponseInterface $response
     * @return mixed
     */
    public function formatResponse(ResponseInterface $response)
    {
        if (strpos($response->getHeaderLine('Content-Type'), 'json') !== false) {
            return json_decode($response->getBody()->__toString(), true);
        }

        return $response;
    }
}
