<?php

namespace Ircykk\AllegroApi\Rest;

use Http\Discovery\StreamFactoryDiscovery;
use Http\Message\StreamFactory;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ResponseErrorHandler.
 *
 * @package Ircykk\AllegroApi\Rest
 */
class ResponseErrorHandler
{
    /**
     * @var ResponseInterface
     */
    private $httpResponse;

    /**
     * @var StreamFactory
     */
    private $streamFactory;

    /**
     * ResponseErrorHandler constructor.
     *
     * @param ResponseInterface $httpResponse
     * @param StreamFactory|null $streamFactory
     */
    public function __construct(ResponseInterface $httpResponse, StreamFactory $streamFactory = null)
    {
        $this->httpResponse = $httpResponse;
        $this->streamFactory = $streamFactory ?: StreamFactoryDiscovery::find();
    }

    /**
     * Inject body error to response.
     *
     * @return ResponseInterface
     */
    public function getResponse()
    {
        $message = $this->getMessageByHttpCode((int)$this->httpResponse->getStatusCode());

        $errors = [
            'errors' => [
                [
                    'code' => sprintf('API_HTTP_%s', $this->httpResponse->getStatusCode()),
                    'message' => $message,
                    'details' => null,
                    'path' => null,
                    'userMessage' => null,
                ]
            ]
        ];

        $stream = $this->streamFactory->createStream(json_encode($errors));

        $this->httpResponse = $this->httpResponse->withBody($stream);
        $this->httpResponse = $this->httpResponse->withHeader('Content-Type', 'application/vnd.allegro.public.v1+json');

        return $this->httpResponse;
    }

    /**
     * Gets message by HTTP code.
     *
     * @param int $code
     * @return string
     */
    private function getMessageByHttpCode($code)
    {
        switch ($code) {
            case 400:
                $message = 'Bad Request';
                break;
            case 401:
                $message = 'Unauthorized';
                break;
            case 402:
                $message = 'Payment Required';
                break;
            case 403:
                $message = 'Forbidden';
                break;
            case 404:
                $message = 'Not Found';
                break;
            case 405:
                $message = 'Method Not Allowed';
                break;
            case 406:
                $message = 'Not Acceptable';
                break;
            case 407:
                $message = 'Proxy Authentication Required';
                break;
            case 408:
                $message = 'Request Time-out';
                break;
            case 409:
                $message = 'Conflict';
                break;
            case 410:
                $message = 'Gone';
                break;
            case 411:
                $message = 'Length Required';
                break;
            case 412:
                $message = 'Precondition Failed';
                break;
            case 413:
                $message = 'Request Entity Too Large';
                break;
            case 414:
                $message = 'Request-URI Too Large';
                break;
            case 415:
                $message = 'Unsupported Media Type';
                break;
            case 500:
                $message = 'Internal Server Error';
                break;
            case 501:
                $message = 'Not Implemented';
                break;
            case 502:
                $message = 'Bad Gateway';
                break;
            case 503:
                $message = 'Service Unavailable';
                break;
            case 504:
                $message = 'Gateway Time-out';
                break;
            case 505:
                $message = 'HTTP Version not supported';
                break;
            default:
                $message = sprintf('Unknown HTTP error code "%s"', $code);
                break;
        }

        return $message;
    }
}
