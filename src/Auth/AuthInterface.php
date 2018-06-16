<?php

namespace Ircykk\AllegroApi\Auth;

use Http\Client\HttpClient;

/**
 * Interface AuthInterface.
 *
 * @package Ircykk\AllegroApi\Auth
 */
interface AuthInterface
{
    /**
     * Fetches the auth tokens based on the current state.
     *
     * @param HttpClient|null $httpClient
     * @return mixed
     */
    public function fetchAuthToken(HttpClient $httpClient = null);
}
