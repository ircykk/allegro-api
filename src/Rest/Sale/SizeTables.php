<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class SizeTables.
 *
 * @link https://developer.allegro.pl/documentation/#/size-tables
 *
 * @package Ircykk\AllegroApi\Rest
 */
class SizeTables extends AbstractRestResource
{
    /**
     * Read size tables list of authenticated user.
     *
     * @param int $userId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all($userId)
    {
        return $this->get('/sale/size-tables?user.id='.rawurldecode($userId));
    }

    /**
     * Read size table of authenticated user.
     *
     * @param string $tableId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function show($tableId)
    {
        return $this->get('/sale/size-tables/'.rawurldecode($tableId));
    }
}
