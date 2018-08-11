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
     * @param string $searchMode
     * @param int $offset
     * @param int $limit
     * @param string $sort
     * @param string $include
     * @param bool $fallback
     * @param array $filters
     * @return ResponseInterface
     * @throws Exception
     */
    public function listing(
        $categoryId = '',
        $phrase = '',
        $sellerId = '',
        $searchMode = 'REGULAR',
        $offset = 0,
        $limit = 60,
        $sort = 'relevance',
        $include = 'all',
        $fallback = true,
        array $filters = []
    ) {
        if (!$categoryId && !$phrase && !$sellerId) {
            throw new InvalidArgumentException('At least one of: category id, phrase, seller id must be provided');
        }

        return $this->get('/offers/listing?'.http_build_query(
            array_merge(
                [
                    'category.id' => $categoryId,
                    'phrase' => $phrase,
                    'seller.id' => $sellerId,
                    'searchMode' => $searchMode,
                    'offset' => $offset,
                    'limit' => $limit,
                    'sort' => $sort,
                    'include' => $include,
                    'fallback' => $fallback,
                ],
                $filters
            )
        ));
    }
}
