<?php

include 'vendor/autoload.php';

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => 'https://webapi.allegro.pl/service.php?wsdl',
        'outputDir' => __DIR__.'/src/Soap/Types',
        'constructorParamsDefaultToNull' => true,
        'namespaceName' => 'Ircykk\AllegroApi'
    ))
);
