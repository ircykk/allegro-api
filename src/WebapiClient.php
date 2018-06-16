<?php

namespace Ircykk\AllegroApi;

use Ircykk\AllegroApi\SoapClient\SoapClientBuilder;

/**
 * SOAP WebapiClient client.
 *
 * @package Ircykk\AllegroApi
 */
class WebapiClient
{
    /**
     * @var SoapClientBuilder
     */
    private $soapClientBuilder;

    /**
     * @var CredentialsInterface
     */
    private $credentials;

    /**
     * SoapClient constructor.
     *
     * @param CredentialsInterface $credentials
     * @param SoapClientBuilder|null $soapClientBuilder
     */
    public function __construct(
        CredentialsInterface $credentials,
        SoapClientBuilder $soapClientBuilder = null
    ) {
        $this->credentials = $credentials;

        $this->soapClientBuilder = $soapClientBuilder ?: new SoapClientBuilder($this->credentials->isSandbox());
        $this->soapClientBuilder->getSoapClient()->setWebapiKey($this->credentials->getClientId());
    }

    /**
     * @param string $sessionHandle
     */
    public function authenticate($sessionHandle)
    {
        $this->soapClientBuilder->getSoapClient()->setSessionHandle($sessionHandle);
    }

    /**
     * @return SoapClient
     */
    public function getSoapClient()
    {
        return $this->soapClientBuilder->getSoapClient();
    }

    /**
     * @return SoapClient
     */
    public function webApi()
    {
        return $this->soapClientBuilder->getSoapClient();
    }
}
