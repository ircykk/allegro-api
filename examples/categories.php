<?php

/**
 * Simple example how to fetch Allegro root categories.
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
 * Fetch root categories.
 */
$response = $client->sale()->categories()->all();

foreach ($response->categories as $category) {
    echo $category->name;
}
