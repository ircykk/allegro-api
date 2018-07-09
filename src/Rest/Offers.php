<?php

namespace Ircykk\AllegroApi\Rest;

use Psr\Http\Message\ResponseInterface;
use Ircykk\AllegroApi\Exception\InvalidArgumentException;
use Http\Client\Exception;

/**
 * Class Offers.
 *
 * @package Ircykk\AllegroApi\Rest
 */
class Offers extends AbstractRestResource
{
    /**
     * Returns search results combined with navigable categories and filters.
     *
     * @param string $categoryId
     * @param string $phrase
     * @param string $sellerId
     * @return ResponseInterface
     * @throws Exception
     */
    public function listing($categoryId = '', $phrase = '', $sellerId = '')
    {
        if (!$categoryId && !$phrase && !$sellerId) {
            throw new InvalidArgumentException('At least one of: category id, phrase, seller id must be provided');
        }

        return $this->get('/offers/listing?'.http_build_query([
            'category.id' => $categoryId,
            'phrase' => $phrase,
            'seller.id' => $sellerId,
        ]));
    }
}
