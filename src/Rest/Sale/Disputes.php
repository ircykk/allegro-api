<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Disputes.
 *
 * @link https://developer.allegro.pl/documentation/#operation/getListOfDisputesUsingGET
 *
 * @package Ircykk\AllegroApi\Rest\Sale
 */
class Disputes extends AbstractRestResource
{
	/**
     * Get the user's disputes
     *
     * @param string $checkoutFormid
     * @param int $limit
     * @param int $offset
     *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all(
        $checkoutId = null,
        $limit = 20,
        $offset = 0
    ) {
        return $this->get('/sale/disputes?'.http_build_query([
                'checkoutForm.id' => $checkoutId,
                'limit' => $limit,
                'offset' => $offset,
            ]));
    }
	
	
    /**
     * Get a single dispute by id.
     *
     * @param string $disputeId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function show($disputeId)
    {
        return $this->get('/sale/disputes/'.rawurldecode($disputeId));
    }
	
    /**
     * Get the messages within a dispute
     *
     * @param string $disputeId
     * @param int $limit
     * @param int $offset
	 *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function messages(
		$disputeId,
        $limit = 20,
        $offset = 0
    )
    {
        return $this->get('/sale/disputes/'.rawurldecode($disputeId) .'/messages?'.http_build_query([
                'limit' => $limit,
                'offset' => $offset,
            ]));
    }
	
    /**
     * Add a message to a dispute
     *
     * @param string $disputeId
     * @param array $params
	 *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function create($disputeId, array $params)
    {
        return $this->post('/sale/disputes/'. rawurldecode($disputeId) .'/messages', $params);
    }
	
    /**
     * Create an attachment declaration

     *
     * @param string $disputeId
     * @param array $params
	 *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function createAttachment(array $params)
    {
        return $this->post('/sale/dispute-attachments', $params);
    }
	
	/**
     * Create an attachment declaration

     *
     * @param string $attachmentId
     * @param string $attachmentDataBinary
	 * @param string $contenType
     * @param array $params
	 *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function uploadAttachment($attachmentId, $attachmentDataBinary, $contentType = null)
    {		
        /**
         * Try to determine content type.
         */
        if (!$contentType) {
            $fileInfo = new \finfo(FILEINFO_MIME_TYPE);
            $contentType = $fileInfo->buffer($attachmentDataBinary);
        }

        if (!in_array($contentType, ['image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/tiff', 'application/pdf'])) {
            throw new InvalidArgumentException(sprintf('Invalid content type: "%s"', $contentType));
        }
		
        $requestHeaders['Content-Type'] = $contentType;
        return $this->post('/sale/dispute-attachments/'. rawurldecode($attachmentId), $attachmentDataBinary, $requestHeaders);
    }
	
	
    /**
     * Get an attachment
     *
     * @param string $attachmentId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function showAttachment($attachmentId)
    {
        return $this->get('/sale/dispute-attachments/'.rawurldecode($disputeId));
    }
	
}