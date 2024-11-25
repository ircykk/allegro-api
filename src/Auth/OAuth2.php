<?php

namespace Ircykk\AllegroApi\Auth;

use Exception;
use Http\Client\Exception as ClientException;
use Http\Client\HttpClient;
use Http\Message\RequestFactory;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\HttpClientDiscovery;
use Ircykk\AllegroApi\CredentialsInterface;
use Ircykk\AllegroApi\Exception\LogicException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OAuth2.
 *
 * @package Ircykk\AllegroApi\Auth
 */
class OAuth2 implements AuthInterface
{
    /**
     * Api authorize URL.
     */
    const OAUTH2_AUTH_URL = 'https://allegro.pl/auth/oauth/authorize';

    /**
     * Api Sandbox authorize URL.
     */
    const OAUTH2_AUTH_SANDBOX_URL = 'https://allegro.pl.allegrosandbox.pl/auth/oauth/authorize';

    /**
     * Auth token URL.
     */
    const OAUTH2_TOKEN_URL = 'https://allegro.pl/auth/oauth/token';

    /**
     * Auth token sandbox URL.
     */
    const OAUTH2_TOKEN_SANDBOX_URL = 'https://allegro.pl.allegrosandbox.pl/auth/oauth/token';

    /**
     * Api device code URL.
     */
    const OAUTH2_AUTH_DEVICE_URL = 'https://allegro.pl/auth/oauth/device';

    /**
     * Api device code sandbox URL.
     */
    const OAUTH2_AUTH_DEVICE_SANDBOX_URL = 'https://allegro.pl.allegrosandbox.pl/auth/oauth/device';

    const CODE_TYPE_AUTH = 1;
    const CODE_TYPE_DEVICE = 2;

    /**
     * @var string
     */
    private $code;

    /**
     * @var int
     */
    private $codeType;

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
     * @return ResponseInterface
     * @throws Exception
     * @throws ClientException
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
     * @param string $code
     * @param int $codeType
     */
    public function setCode($code, $codeType = self::CODE_TYPE_AUTH)
    {
        $this->code = $code;
        $this->codeType = $codeType;
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
     * @param string $refreshToken
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
     * @return RequestInterface
     * @throws Exception
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
            case 'device_code':
            case 'urn:ietf:params:oauth:grant-type:device_code':
                $params['device_code'] = $this->getCode();
                break;
            case 'refresh_token':
                $params['refresh_token'] = $this->getRefreshToken();
                break;
            default:
                // Client credentials
                break;
        }

        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => 'Basic ' . base64_encode(
                $this->credentials->getClientId() . ':' . $this->credentials->getClientSecret()
            ),
        ];

        return $this->requestFactory->createRequest(
            'POST',
            $this->credentials->isSandbox()
                ? self::OAUTH2_TOKEN_SANDBOX_URL
                : self::OAUTH2_TOKEN_URL,
            $headers,
            http_build_query($params)
        );
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
        ) . '?' . http_build_query($query);
    }

    /**
     * Gets user code for device flow auth.
     *
     * @return mixed
     */
    public function getAuthUserCode()
    {
        $params = [
            'client_id' => $this->credentials->getClientId(),
        ];

        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => 'Basic ' . base64_encode(
                $this->credentials->getClientId() . ':' . $this->credentials->getClientSecret()
            ),
        ];

        $request = $this->requestFactory->createRequest(
            'POST',
            $this->credentials->isSandbox()
            ? self::OAUTH2_AUTH_DEVICE_SANDBOX_URL
            : self::OAUTH2_AUTH_DEVICE_URL,
            $headers,
            http_build_query($params)
        );

        $response = $this->httpClient->sendRequest($request);

        return json_decode($response->getBody()->__toString());
    }

    /**
     * Gets grant type depends on object.
     *
     * @return null|string
     */
    public function getGrantType()
    {
        if ($this->code) {
            switch ($this->codeType) {
                case self::CODE_TYPE_AUTH:
                    return 'authorization_code';
                case self::CODE_TYPE_DEVICE:
                    return 'urn:ietf:params:oauth:grant-type:device_code';
                default:
                    break;
            }
        }

        if ($this->refreshToken) {
            return 'refresh_token';
        }

        return 'client_credentials';
    }
}
