<?php

namespace Ircykk\AllegroApi\Auth;

use Http\Client\HttpClient;
use Http\Message\RequestFactory;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\HttpClientDiscovery;
use Ircykk\AllegroApi\CredentialsInterface;
use Ircykk\AllegroApi\Exception\LogicException;

/**
 * Class OAuth2.
 *
 * @package Ircykk\AllegroApi\Auth
 */
class OAuth2 implements AuthInterface
{
    /**
     * Auth token endpoint.
     */
    const OAUTH2_TOKEN_URI = 'https://allegro.pl/auth/oauth/token';

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $refreshToken;

    /**
     * @var CredentialsInterface
     */
    private $credentials;

    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var RequestFactory
     */
    private $requestFactory;

    /**
     * OAuth2 constructor.
     *
     * @param CredentialsInterface $credentials
     */
    public function __construct(
        CredentialsInterface $credentials
    ) {
        $this->credentials = $credentials;
        $this->httpClient = HttpClientDiscovery::find();
        $this->requestFactory = MessageFactoryDiscovery::find();
    }

    /**
     * Fetch the auth token.
     *
     * @param HttpClient|null $httpClient
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function fetchAuthToken(HttpClient $httpClient = null)
    {
        $this->httpClient = $httpClient ?: $this->httpClient;

        $response = $this->httpClient->sendRequest($this->generateTokenRequest());

        return json_decode($response->getBody()->__toString());
    }

    /**
     * Sets the authorization code.
     *
     * @param $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Gets the authorization code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets refresh token.
     *
     * @param $refreshToken
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     * Gets refresh token.
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * Create token request.
     *
     * @return \Psr\Http\Message\RequestInterface
     * @throws \Exception
     */
    public function generateTokenRequest()
    {
        $grantType = $this->getGrantType();

        $params = [
            'grant_type' => $grantType,
        ];

        switch ($grantType) {
            case 'authorization_code':
                $params['code'] = $this->getCode();
                $params['redirect_uri'] = $this->credentials->getRedirectUri();
                break;
            case 'refresh_token':
                $params['refresh_token'] = $this->getRefreshToken();
                break;
            default:
                throw new LogicException('Auth code or refresh token must be set');
        }

        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => 'Basic '.base64_encode(
                $this->credentials->getClientId().':'.$this->credentials->getClientSecret()
            )
        ];

        return $this->requestFactory->createRequest(
            'POST',
            self::OAUTH2_TOKEN_URI,
            $headers,
            http_build_query($params)
        );
    }

    /**
     * Gets grant type depends on object.
     *
     * @return null|string
     */
    public function getGrantType()
    {
        if ($this->code) {
            return 'authorization_code';
        }

        if ($this->refreshToken) {
            return 'refresh_token';
        }

        return null;
    }
}
