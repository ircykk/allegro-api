<?php

/**
 * Simple example how to fetch offers listing.
 */

use Ircykk\AllegroApi\Client;

include_once __DIR__.'/credentials.php';
include_once __DIR__.'/token.php';

$client = new Client($credentials);

/**
 * Authenticate with access token.
 */
$client->authenticate($token->access_token);

/**
 * Fetch offers with phrase "Lorem ipsum" in name.
 */
$response = $client->offers()->listing(null, 'Lorem ipsum');

foreach ($response->items->regular as $offer) {
    echo $offer->name;
}
