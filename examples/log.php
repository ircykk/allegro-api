<?php

/**
 * To log api requests you can use any PSR-3 logger library.
 *
 * In this example we use Monolog. Add this to your project with composer:
 *
 * composer require monolog/monolog
 */

use Ircykk\AllegroApi\Client;
use Http\Client\Common\Plugin\LoggerPlugin;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

include_once __DIR__.'/credentials.php';
include_once __DIR__.'/token.php';

$client = new Client($credentials);

/**
 * Create logger instance and use HTTPlug plugin to add logger to client.
 */
$logger = new Logger('api');
$logger->pushHandler(
    new StreamHandler(__DIR__.'/api.log', Logger::DEBUG)
);
$loggerPlugin = new LoggerPlugin($logger);
$client->addPlugin($loggerPlugin);

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
