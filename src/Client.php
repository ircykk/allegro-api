<?php

namespace Ircykk\AllegroApi;

use Exception;
use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin;
use Http\Client\Exception as ClientException;
use Http\Client\HttpClient;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\RequestFactory;
use Ircykk\AllegroApi\HttpClient\HttpClientBuilder;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Http\Message\RequestInterface;
use Ircykk\AllegroApi\Auth\AuthInterface;
use Ircykk\AllegroApi\Auth\OAuth2;
use Ircykk\AllegroApi\HttpClient\Plugin\TokenAuthentication;
use Ircykk\AllegroApi\Rest;
use Ircykk\AllegroApi\Exception\InvalidArgumentException;
use Ircykk\AllegroApi\Rest\Response\ResponseFormatterInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * REST Api Client.
 *
 * @method Rest\Sale sale()
 * @method Rest\Users users()
 * @method Rest\AfterSalesServiceConditions afterSalesServiceConditions()
 * @method Rest\PointsOfService pointsOfService()
 * @method Rest\Pricing pricing()
 * @method Rest\Offers offers()
 * @method Rest\Order order()
 *
 * @package Ircykk\AllegroApi
 */
class Client extends HttpMethodsClient
{
    /**
     * Api endpoint URI.
     */
    const API_URI = 'https://api.allegro.pl';

    /**
     * Api image endpoint URI.
     */
    const API_IMAGE_URI = 'https://upload.allegro.pl';

    /**
     * Api Sandbox endpoint URI.
     */
    const API_SANDBOX_URI = 'https://api.allegro.pl.allegrosandbox.pl';

    /**
     * @var HttpClientBuilder
     */
    private $httpClientBuilder;

    /**
     * @var AuthInterface
     */
    private $auth;

    /**
     * @var CredentialsInterface
     */
    private $credentials;

    /**
     * Access token.
     * @var string|null
     */
    private $token;

    /**
     * Client constructor.
     *
     * @param CredentialsInterface $credentials
     * @param HttpClientBuilder|null $httpClientBuilder
     */
    public function __construct(CredentialsInterface $credentials, HttpClientBuilder $httpClientBuilder = null)
    {
        $this->credentials = $credentials;
        $this->httpClientBuilder = $httpClientBuilder ?: new HttpClientBuilder();

        parent::__construct(
            $this->httpClientBuilder->getHttpClient(),
            $this->httpClientBuilder->getRequestFactory()
        );
    }

    /**
     * Calls REST resource.
     *
     * @param string $name
     * @param mixed $args
     * @return Rest\AbstractRestResource
     */
    public function __call($name, $args)
    {
        try {
            return $this->api($name);
        } catch (InvalidArgumentException $e) {
            throw new InvalidArgumentException(sprintf('Undefined method called: "%s"', $name));
        }
    }

    /**
     * Calls REST resource.
     *
     * @param string $name
     * @return mixed
     */
    public function api($name)
    {
        switch ($name) {
            case 'sale':
                return new Rest\Sale($this);
            case 'users':
                return new Rest\Users($this);
            case 'assc':
            case 'afterSalesServiceConditions':
                return new Rest\AfterSalesServiceConditions($this);
            case 'pos':
            case 'pointsOfService':
                return new Rest\PointsOfService($this);
            case 'pricing':
                return new Rest\Pricing($this);
            case 'offers':
                return new Rest\Offers($this);
            case 'order':
                return new Rest\Order($this);
            default:
                throw new InvalidArgumentException(sprintf('Undefined method called: "%s"', $name));
        }
    }

    /**
     * @return HttpClient
     */
    public function getHttpClient()
    {
        return $this->httpClientBuilder->getHttpClient();
    }

    /**
     * @return RequestFactory
     */
    public function getRequestFactory()
    {
        return $this->httpClientBuilder->getRequestFactory();
    }

    /**
     * Sends REST requests.
     *
     * @param RequestInterface $request
     * @return ResponseInterface
     * @throws Exception
     * @throws ClientException
     */
    public function sendRequest(RequestInterface $request)
    {
        if (in_array($request->getHeader('Content-Type'), ['image/jpeg', 'image/png', 'image/gif'])) {
            $uri = self::API_IMAGE_URI;
        } else {
            $uri = $this->credentials->isSandbox() ? self::API_SANDBOX_URI : self::API_URI;
        }

        /**
         * Set host.
         */
        $host = UriFactoryDiscovery::find()->createUri($uri);
        $uri = $request->getUri()
            ->withHost($host->getHost())
            ->withScheme($host->getScheme())
            ->withPort($host->getPort());
        $request = $request->withUri($uri);

        /**
         * Add "Accept" header.
         */
        if (!$request->getHeader('Accept')) {
            $request = $request->withHeader('Accept', 'application/vnd.allegro.public.v1+json');
        }

        return $this->httpClientBuilder->getHttpClient()->sendRequest($request);
    }

    /**
     * Ads plugin to HTTP client builder.
     *
     * @param Plugin $plugin
     */
    public function addPlugin(Plugin $plugin)
    {
        $this->httpClientBuilder->addPlugin($plugin);
    }

    /**
     * Ads cache pool.
     *
     * @param CacheItemPoolInterface $cache
     * @param array $config
     */
    public function addCache(CacheItemPoolInterface $cache, array $config = [])
    {
        $this->httpClientBuilder->addCache($cache, $config);
    }

    /**
     * @param ResponseFormatterInterface $responseFormatter
     */
    public function addResponseFormatter(ResponseFormatterInterface $responseFormatter)
    {
        $this->httpClientBuilder->addResponseFormatter($responseFormatter);
    }

    /**
     * @return ResponseFormatterInterface
     */
    public function getResponseFormatter()
    {
        return $this->httpClientBuilder->getResponseFormatter();
    }

    /**
     * Authenticate all next requests.
     *
     * @param string $token
     */
    public function authenticate($token)
    {
        $this->setToken($token);

        $this->addPlugin(new TokenAuthentication($this->token));
    }

    /**
     * Gets access token by access code.
     *
     * @param string $code
     * @return mixed|ResponseInterface
     * @throws ClientException
     */
    public function fetchAccessTokenWithAuthCode($code)
    {
        $auth = $this->getOAuth2Service();
        $auth->setCode($code);

        return $auth->fetchAuthToken();
    }

    /**
     *  Gets access token by refresh token.
     *
     * @param string $refreshToken
     * @return mixed|ResponseInterface
     * @throws ClientException
     */
    public function fetchAccessTokenWithRefreshToken($refreshToken)
    {
        $auth = $this->getOAuth2Service();
        $auth->setRefreshToken($refreshToken);

        return $auth->fetchAuthToken();
    }

    /**
     * Gets OAuth2 authentication service.
     *
     * @return AuthInterface|OAuth2
     */
    protected function getOAuth2Service()
    {
        if (!$this->auth) {
            $this->auth = $this->createOAuth2Service();
        }

        return $this->auth;
    }

    /**
     * Creates OAuth2 authentication service.
     *
     * @return OAuth2
     */
    protected function createOAuth2Service()
    {
        return new OAuth2($this->credentials);
    }

    /**
     * Sets authentication service.
     *
     * @param AuthInterface $auth
     */
    public function setAuth(AuthInterface $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Sets new token.
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * Gets authentication URL.
     *
     * @return string
     */
    public function getAuthUrl()
    {
        return $this->getOAuth2Service()->getAuthUrl();
    }
}
