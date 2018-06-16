<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestResource;
use Psr\Http\Message\ResponseInterface;
use Http\Client\Exception;

/**
 * Class OfferContacts.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-contacts
 *
 * @package Ircykk\AllegroApi\Rest
 */
class OfferContacts extends AbstractRestResource
{
    /**
     * Gets all contacts.
     *
     * @param string $sellerId
     * @return ResponseInterface
     * @throws Exception
     */
    public function all($sellerId)
    {
        return $this->get('/sale/offer-contacts?seller.id='.rawurldecode($sellerId));
    }

    /**
     * Gets contact.
     *
     * @param string $contactId
     * @return mixed
     * @throws Exception
     */
    public function show($contactId)
    {
        return $this->get('/sale/offer-contacts/'.rawurldecode($contactId));
    }

    /**
     * Creates new contact.
     *
     * @param array $params
     * @return mixed
     * @throws Exception
     */
    public function create(array $params)
    {
        return $this->post('/sale/offer-contacts', $params);
    }

    /**
     * Updates contact.
     *
     * @param string $contactId
     * @param array $params
     * @return mixed
     * @throws Exception
     */
    public function update($contactId, array $params)
    {
        return $this->put('/sale/offer-contacts/'.rawurldecode($contactId), $params);
    }
}
