<?php

/**
 * It is recommended to use caching library to improve performance.
 * This can be done by passing a PSR-6 compatible library to the client.
 *
 * In this example we use Symfony Cache. Add this to your project with composer:
 *
 * composer require symfony/cache
 */

use Ircykk\AllegroApi\Client;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

include_once __DIR__.'/credentials.php';
include_once __DIR__.'/token.php';

$client = new Client($credentials);

/**
 * Add PSR-6 library to our client.
 */
$cache = new FilesystemAdapter();
$client->addCache($cache, ['default_ttl' => 3600]);

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
