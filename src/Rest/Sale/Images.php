<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Exception\InvalidArgumentException;
use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Images.
 *
 * @package Ircykk\AllegroApi\Rest\Sale
 */
class Images extends AbstractRestResource
{
    /**
     * Uploads new image.
     *
     * @param string $imageDataBinary
     * @param string $contentType
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function add($imageDataBinary, $contentType = null)
    {
        /**
         * Try to determine content type.
         */
        if (!$contentType) {
            $fileInfo = new \finfo(FILEINFO_MIME_TYPE);
            $contentType = $fileInfo->buffer($imageDataBinary);
        }

        if (!in_array($contentType, ['image/jpeg', 'image/png', 'image/gif'])) {
            throw new InvalidArgumentException(sprintf('Invalid content type: "%s"', $contentType));
        }

        $requestHeaders['Content-Type'] = $contentType;

        return $this->post('/sale/images', $imageDataBinary, $requestHeaders);
    }
}
