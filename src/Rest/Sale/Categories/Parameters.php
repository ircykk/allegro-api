<?php

namespace Ircykk\AllegroApi\Rest\Sale\Categories;

use Http\Client\Exception;
use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Parameters.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest\Sale
 */
class Parameters extends AbstractRestResource
{
    /**
     * Gets parameters by category id.
     *
     * @param string $categoryId
     * @return mixed
     * @throws Exception
     */
    public function all($categoryId)
    {
        return $this->get('/sale/categories/'.rawurldecode($categoryId).'/parameters');
    }
}
