<?php

/**
 * Load token.
 *
 * @see authentication.php
 */
$token = @json_decode(file_get_contents(__DIR__.'/token.json'));

if (!isset($token->access_token)) {
    die('Unable to load token ['.__DIR__.'/token.json], see: authentication.php');
}
