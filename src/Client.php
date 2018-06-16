<?php

namespace Ircykk\AllegroApi;

use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin;
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

/**
 * REST Api Client.
 *
 * @method Rest\Sale sale()
 * @method Rest\Users users()
 * @method Rest\AfterSalesServiceConditions afterSalesServiceConditions()
 * @method Rest\PointsOfService pointsOfService()
 * @method Rest\Pricing pricing()
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
     * Api Sandbox endpoint URI.
     */
    const API_SANDBOX_URI = 'https://api.allegro.pl.allegrosandbox.pl';

    /**
     * Api authorize URL.
     */
    const OAUTH2_AUTH_URL = 'https://allegro.pl/auth/oauth/authorize';

    /**
     * Api Sandbox authorize URL.
     */
    const OAUTH2_AUTH_SANDBOX_URL = 'https://allegro.pl.allegrosandbox.pl/auth/oauth/';

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
     * @param $name
     * @param $args
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
     * @param $name
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
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function sendRequest(RequestInterface $request)
    {
        /**
         * Set host.
         */
        $host = UriFactoryDiscovery::find()->createUri(
            $this->credentials->isSandbox() ? self::API_SANDBOX_URI : self::API_URI
        );
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
     * Authenticate all next requests.
     *
     * @param $token
     */
    public function authenticate($token)
    {
        $this->setToken($token);

        $this->addPlugin(
            new TokenAuthentication($this->token)
        );
    }

    /**
     * Gets access token by access code.
     *
     * @param $code
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \Http\Client\Exception
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
     * @param $refreshToken
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \Http\Client\Exception
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
        return new OAuth2(
            $this->credentials
        );
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
     * @param $token
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
        $query = [
            'response_type' => 'code',
            'client_id' => $this->credentials->getClientId(),
            'redirect_uri' => $this->credentials->getRedirectUri(),
        ];

        return ($this->credentials->isSandbox()
                ? self::OAUTH2_AUTH_SANDBOX_URL
                : self::OAUTH2_AUTH_URL
            ).'?'.http_build_query($query);
    }
}
