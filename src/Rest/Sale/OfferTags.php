<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Http\Client\Exception;
use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class OfferTags.
 *
 * @link https://developer.allegro.pl/documentation/#/tags
 *
 * @package Ircykk\AllegroApi\Rest
 */
class OfferTags extends AbstractRestResource
{
    /**
     * Returns a list of tags defined by the specified user.
     *
     * @param string $userId
     * @param int $limit
     * @param int $offset
     * @return mixed
     * @throws Exception
     */
    public function all($userId, $limit = 1000, $offset = 0)
    {
        return $this->get('/sale/offer-tags?'.
            http_build_query([
                'user.id' => $userId,
                'limit' => $limit,
                'offset' => $offset,
            ])
        );
    }

    /**
     * Creates a new tag.
     *
     * @param array $params
     * @return mixed
     * @throws Exception
     */
    public function create(array $params)
    {
        return $this->post('/sale/offer-tags', $params);
    }

    /**
     * Updates the tag.
     *
     * @param string $tagId
     * @param array $params
     * @return mixed
     * @throws Exception
     */
    public function update($tagId, array $params)
    {
        return $this->put('/sale/offer-tags/'.rawurldecode($tagId), $params);
    }

    /**
     * Deletes the tag.
     *
     * @param string $tagId
     * @return mixed
     * @throws Exception
     */
    public function remove($tagId)
    {
        return $this->delete('/sale/offer-tags/'.rawurldecode($tagId));
    }
}
