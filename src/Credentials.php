<?php

namespace Ircykk\AllegroApi;

/**
 * Class Credentials.
 *
 * @package Ircykk\AllegroApi
 */
class Credentials implements CredentialsInterface
{
    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $clientSecret;

    /**
     * @var string
     */
    private $redirectUri;

    /**
     * @var bool
     */
    private $isSandbox;

    /**
     * Credentials constructor.
     *
     * @param $clientId
     * @param $clientSecret
     * @param $redirectUri
     * @param bool $isSandbox
     */
    public function __construct(
        $clientId,
        $clientSecret,
        $redirectUri = null,
        $isSandbox = false
    ) {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUri = $redirectUri;
        $this->isSandbox = $isSandbox;
    }

    /**
     * Gets Client Id.
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Gets Client secret.
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * Gets redirect URI.
     *
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * Is Sandbox environment.
     *
     * @return bool
     */
    public function isSandbox()
    {
        return $this->isSandbox;
    }
}
