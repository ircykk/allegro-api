<?php

namespace Ircykk\Tests;

use Ircykk\AllegroApi\Client;
use Ircykk\AllegroApi\Credentials;
use Ircykk\AllegroApi\Rest;

class ClientTest extends \PHPUnit\Framework\TestCase
{
    public $client;

    public function setUp()
    {
        $this->client = new Client($this->getCredentials());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowsAnExceptionIfUnknownEndpoint()
    {
        $this->client->api('foo');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowsAnExceptionIfUnknownMagicEndpoint()
    {
        $this->client->foo();
    }

    /**
     * Test that client returns proper class.
     */
    public function testIsProperClass()
    {
        $this->assertInstanceOf(Rest\Sale::class, $this->client->sale());
        $this->assertInstanceOf(Rest\Users::class, $this->client->users());
        $this->assertInstanceOf(Rest\Offers::class, $this->client->offers());
    }

    /**
     * Test that client returns proper class.
     */
    public function testIsProperMagicClass()
    {
        $this->assertInstanceOf(Rest\Sale::class, $this->client->api('sale'));
        $this->assertInstanceOf(Rest\Users::class, $this->client->api('users'));
        $this->assertInstanceOf(Rest\Offers::class, $this->client->api('offers'));
    }

    /**
     * Test that HTTP Client is not required in constructor.
     */
    public function testShouldNotHaveToPassHttpClientToConstructor()
    {
        $this->assertInstanceOf(\Http\Client\HttpClient::class, $this->client->getHttpClient());
    }

    /**
     * Test auth url generation.
     */
    public function testGetAuthUrl()
    {
        $actual = 'https://allegro.pl.allegrosandbox.pl/auth/oauth/';
        $actual .= '?'.http_build_query([
            'response_type' => 'code',
            'client_id' => 'AAAA-BBBB-CCCC',
            'redirect_uri' => 'http://example.com/example',
        ]);

        $this->assertEquals($this->client->getAuthUrl(), $actual);
    }

    /**
     * @return Credentials
     */
    public function getCredentials()
    {
        return new Credentials(
            'AAAA-BBBB-CCCC',
            'DDDD-EEEE-FFFF',
            'http://example.com/example',
            true
        );
    }
}
