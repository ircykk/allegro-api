<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestBetaResource;

/**
 * Class Categories.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest\Sale
 */
class Categories extends AbstractRestBetaResource
{
    /**
     * [BETA] Get categories children by parent id.
     *
     * @param string $parentId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all($parentId = '')
    {
        return $this->get('/sale/categories?parent.id='.rawurldecode($parentId));
    }

    /**
     * [BETA] Get category by id.
     *
     * @param string $categoryId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function show($categoryId)
    {
        return $this->get('/sale/categories/'.rawurldecode($categoryId));
    }

    /**
     * @return Categories\Parameters
     */
    public function parameters()
    {
        return new Categories\Parameters($this->client);
    }
}
