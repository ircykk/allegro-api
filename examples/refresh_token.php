<?php

/**
 * Access token is valid for 12h so we need to refresh it with "refresh_token" in order to keep out app working.
 * First "refresh_token" is valid for 365 days so every one year we must re-authenticate our client.
 */

use Ircykk\AllegroApi\Client;

include_once __DIR__.'/credentials.php';
include_once __DIR__.'/token.php';

$client = new Client($credentials);

/**
 * Call "fetchAccessTokenWithRefreshToken" method to fetch new access token by refresh token.
 */
$token = $client->fetchAccessTokenWithRefreshToken($token->refresh_token);

if (isset($token->access_token)) {
    file_put_contents(__DIR__.'/token.json', json_encode($token));
    echo 'New token stored: '.__DIR__.'/token.json';
} else {
    echo 'Unable to fetch access token.';
}
