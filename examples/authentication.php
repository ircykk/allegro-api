<?php

/**
 * In order to make any api request we need to authenticate with access token.
 * To get access token we have go to auth page and login into Allegro account.
 * After that we will be redirected back with code which we can use to fetch access token.
 */

use Ircykk\AllegroApi\Client;

include_once __DIR__.'/credentials.php';

$client = new Client($credentials);

if (!isset($_GET['code'])) {
    /**
     * Redirect to Allegro auth page.
     */
    header('Location: '.$client->getAuthUrl());
} else {
    /**
     * If we have code we can now fetch our access token.
     */
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if (isset($token->access_token)) {
        /**
         * Store access token...
         */
        if (file_put_contents(__DIR__.'/token.json', json_encode($token))) {
            echo 'Token stored: '.__DIR__.'/token.json';
        }
    } else {
        /**
         * Token fetch fail.
         */
        echo 'Unable to fetch access token.';
    }
}
