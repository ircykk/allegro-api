<?php

namespace Ircykk\AllegroApi\Rest\Sale\Categories;

use Ircykk\AllegroApi\Rest\AbstractRestBetaResource;
use Http\Client\Exception;

/**
 * Class CategoriesParameters.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest\Sale
 */
class Parameters extends AbstractRestBetaResource
{
    /**
     * [BETA] Gets parameters by category id.
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
