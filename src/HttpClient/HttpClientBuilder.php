<?php

namespace Ircykk\AllegroApi\HttpClient;

use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use Http\Message\MessageFactory;
use Http\Message\RequestFactory;
use Http\Message\StreamFactory;
use Ircykk\AllegroApi\Rest\Response\ObjectResponseFormatter;
use Ircykk\AllegroApi\Rest\Response\ResponseFormatterInterface;
use Psr\Cache\CacheItemPoolInterface;

/**
 * Class HttpClientBuilder.
 *
 * @package Ircykk\AllegroApi\HttpClient
 */
class HttpClientBuilder
{
    /**
     * HTTP Client object.
     *
     * @var HttpClient
     */
    private $httpClient;

    /**
     * Plugins Client.
     *
     * @var HttpMethodsClient
     */
    private $pluginClient;

    /**
     * @var RequestFactory
     */
    private $requestFactory;

    /**
     * @var StreamFactory
     */
    private $streamFactory;

    /**
     * @var ResponseFormatterInterface
     */
    private $responseFormatter;

    /**
     * @var Plugin[]
     */
    private $plugins = [];

    /**
     * @param HttpClient     $httpClient
     * @param RequestFactory $requestFactory
     */
    public function __construct(
        HttpClient $httpClient = null,
        RequestFactory $requestFactory = null
    ) {
        $this->httpClient = $httpClient ?: HttpClientDiscovery::find();
        $this->requestFactory = $requestFactory ?: MessageFactoryDiscovery::find();

        $this->streamFactory = StreamFactoryDiscovery::find();
        $this->responseFormatter = new ObjectResponseFormatter();
    }

    /**
     * @return HttpClient
     */
    public function getHttpClient()
    {
        if (!empty($this->plugins)) {
            $this->pluginClient = new PluginClient(
                $this->httpClient,
                $this->plugins
            );
        }

        return $this->pluginClient ?: $this->httpClient;
    }

    /**
     * @return MessageFactory
     */
    public function getRequestFactory()
    {
        return $this->requestFactory;
    }

    /**
     * Ads a plugin.
     *
     * @param Plugin $plugin
     */
    public function addPlugin(Plugin $plugin)
    {
        $this->plugins[] = $plugin;
    }

    /**
     * Create and ads cache plugin to plugins.
     *
     * @param CacheItemPoolInterface $cachePool
     * @param array $config
     */
    public function addCache(CacheItemPoolInterface $cachePool, array $config = [])
    {
        $this->plugins[] = new Plugin\CachePlugin($cachePool, $this->streamFactory, $config);
    }

    /**
     * @param $responseFormatter
     */
    public function addResponseFormatter(ResponseFormatterInterface $responseFormatter)
    {
        $this->responseFormatter = $responseFormatter;
    }

    /**
     * @return ResponseFormatterInterface
     */
    public function getResponseFormatter()
    {
        return $this->responseFormatter;
    }
}
