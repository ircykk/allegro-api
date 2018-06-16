<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestResource;
use Psr\Http\Message\ResponseInterface;
use Http\Client\Exception;

/**
 * Class UserRating.
 *
 * @link https://developer.allegro.pl/documentation/#/user-ratings
 *
 * @package Ircykk\AllegroApi\Rest
 */
class UserRating extends AbstractRestResource
{
    /**
     * Gets user ratings.
     *
     * @param string $userId
     * @param bool $recommended
     * @param int $offset
     * @param int $limit
     * @return ResponseInterface
     * @throws Exception
     */
    public function show($userId, $recommended = true, $offset = 0, $limit = 20)
    {
        return $this->get('/sale/user-ratings?'.http_build_query([
            'user.id' => $userId, 'recommended' => (int)$recommended, 'offset' => (int)$offset, 'limit' => (int)$limit
        ]));
    }
}
